$base = "c:\Users\aliba\Downloads\mkobalogun-website (2)\mkobalogun\wordpress-theme"
$src  = Join-Path $base "mkobalogun"
$dest = Join-Path $base "mkobalogun-theme.zip"

if (Test-Path $dest) { Remove-Item -LiteralPath $dest -Force }

Add-Type -AssemblyName System.IO.Compression
Add-Type -AssemblyName System.IO.Compression.FileSystem

$zip = [System.IO.Compression.ZipFile]::Open($dest, [System.IO.Compression.ZipArchiveMode]::Create)
$prefixLen = (Split-Path $src -Parent).Length + 1

Get-ChildItem -LiteralPath $src -Recurse -File | ForEach-Object {
    $rel = $_.FullName.Substring($prefixLen)
    $rel = $rel.Replace([char]92, [char]47)   # backslash -> forward slash
    [void][System.IO.Compression.ZipFileExtensions]::CreateEntryFromFile($zip, $_.FullName, $rel, [System.IO.Compression.CompressionLevel]::Optimal)
}
$zip.Dispose()

Write-Output "Entries:"
$a = [System.IO.Compression.ZipFile]::OpenRead($dest)
$a.Entries | Select-Object -ExpandProperty FullName
$a.Dispose()
