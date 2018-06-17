<?php
$continents = [
    'Eurasia' => ['Ursus arctos', 'Canis lupus', 'Halichoerus grypus', 'Rangifer tarandus'],
    'Africa' => ['Kobus vardonii', 'Giraffa camelopardalis', 'Pangolins', 'Panthera leo'],
    'North America' => ['Bison', 'Procyon lotor', 'Haliaeetus leucocephalus'],
    'South America' => ['Lama glama', 'Panthera onca', 'Puma concolor', 'Platyrrhini'],
    'Australia' => ['Macropus rufus', 'Phascolarctos cinereus', 'Sarcophilus harrisii', 'Dromaius'],
];

$firstWords = [];
$secondWords = [];
foreach ($continents as $continent => $animals) {
	foreach ($animals as $animal) {
		$twoWordAnimal = explode(' ', $animal);
		if (count($twoWordAnimal) == 2) { 
			$firstWords[] = $twoWordAnimal[0];
			$secondWords[] = $twoWordAnimal[1];
		}
	}
}

shuffle($firstWords);
shuffle($secondWords);
$magicAnimals = [];
$arrayLength = count($firstWords);
for ($i = 0; $i < $arrayLength; $i++) {
	
	$magicAnimals[] = $firstWords[$i] . ' ' . $secondWords[$i];
}

$commaList = implode(', ', $magicAnimals);
echo($commaList);
?>