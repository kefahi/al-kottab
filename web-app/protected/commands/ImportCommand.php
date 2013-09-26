<?php
class ImportCommand extends CConsoleCommand {
  public function run($args) {
    $file_path = dirname(__FILE__) . '/../data/tr.csv';
    $file = fopen($file_path, "r");
    if(!isset($file)) { echo "Failed to open file\n"; die();}
    $count = 1;
    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
      $entry = new Countries();
      $entry->name = $data[0];
      $entry->code = $data[1];

      if(!$entry->save()){
        print_r($entry->errors);  }
      else { 
        echo "Created new entry : " . $entry->code, PHP_EOL;
        $count++;
      } continue;
    }
    echo "completed importing $count entries\n";
  }
}

