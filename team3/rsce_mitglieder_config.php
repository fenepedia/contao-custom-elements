<?php

return array(
	'label' => array(
		'de' => array(
			'Mitglieder',
			'Eine Liste von Personen mit Foto, Name, E-Mail und Social-Media-Links',
		),
	),
	'types' => array('content'),
	'contentCategory' => 'texts',
	'standardFields' => array('headline', 'cssID'),
	'fields' => array(
		'members' => array(
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
					'eval' => array('tl_class' => 'w50'),
				),
				'zusatz' => array(
					'label' => array(
						'de' => array('Zusatz', 'Zusatzbezeichnung'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),

			),
		),
	),
);
