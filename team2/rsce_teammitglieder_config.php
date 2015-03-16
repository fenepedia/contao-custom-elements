<?php

return array(
	'label' => array(
		'de' => array(
			'Team-Mitglieder',
			'Eine Liste von Personen mit Foto, Name, E-Mail und Position',
		),
	),
	'types' => array('content'),
	'contentCategory' => 'texts',
	'standardFields' => array('headline', 'cssID'),
	'fields' => array(
		'tmembers' => array(
			'label' => array(
				'de' => array(
					'Personen',
					'Fügen Sie eine beliebige Anzahl an Mitarbeitern ein.',
				),
			),
			'elementLabel' => array(
				'de' => 'Mitarbeiter %s',
			),
			'inputType' => 'list',
			'fields' => array(
				'image' => array(
					'label' => array(
						'de' => array('Profilbild', ''),
					),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => 'jpg,jpeg,png,gif,svg',
					),
				),
				'name' => array(
					'label' => array(
						'de' => array('Name', 'Vor- und Nachname '),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => ''),
				),
				'z1' => array(
					'label' => array(
						'de' => array('Zusatz1', 'Zuständigkeit - Zeile 1'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'z2' => array(
					'label' => array(
						'de' => array('Zusatz2', 'Zuständigkeit - Zeile 2'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'telefon' => array(
					'label' => array(
						'de' => array('Telefon', 'Telefonnummer'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),				
				'email' => array(
					'label' => array(
						'de' => array('E-Mail', 'E-Mailadresse'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
			),
		),
	),
);
