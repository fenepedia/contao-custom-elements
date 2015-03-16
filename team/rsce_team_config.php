<?php

return array(
	'label' => array(
		'de' => array(
			'Team',
			'Liste von Teammitgliedern mit Bild, Name und Adresse',
		),
	),
	'types' => array('content'),
	'contentCategory' => 'texts',
	'standardFields' => array('cssID'),
	'fields' => array(
		'members' => array(
			'label' => array(
				'de' => array(
					'Teammitglieder',
					'Fügen Sie eine beliebige Anzahl an Teammitglieder ein.',
				),
			),
			'elementLabel' => array(
				'de' => 'Teammitglied %s',
			),
			'inputType' => 'list',
			'fields' => array(
				'name' => array(
					'label' => array(
						'de' => array('Name', 'Mitarbeiter Vor- und Nachname'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'position' => array(
					'label' => array(
						'de' => array('Position', 'Position des Mitarbeiters'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'email' => array(
					'label' => array(
						'de' => array('E-Mail', 'E-Mailadresse Bsp: info@ln-pr.com'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'crl'),
				),
				'image' => array(
					'label' => array(
						'de' => array('Bild', 'Größe: 120x120'),
					),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => 'jpg,jpeg,png',
						'eval' => array('tl_class' => 'long')
					),
				),
			),
		),
	),
);
