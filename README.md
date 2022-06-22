# bulk-freepbx-extensions
Script to generate a CSV to import into FreePBX Bulk extensions

## usage
change variables: fitst, last, tech (optional), password (optional)


```
php new-bulk-extensions-gen.php > extensions_101-110.csv
fwconsole bi --type=extensions extensions_101-110.csv
fwconsole relo
```
