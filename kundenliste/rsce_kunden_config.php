<?php

return array(
	'label' => array(
		'de' => array(
			'Kunden',
			'Liste von Kunden mit Bild, Name und Link',
		),
	),
	'types' => array('content'),
	'contentCategory' => 'texts',
	'standardFields' => array('headline','cssID'),
	'fields' => array(
		'kunden' => array(
			'label' => array(
				'de' => array(
					'Kunden',
					'Fügen Sie eine beliebige Anzahl an Kunden ein.',
				),
			),
			'elementLabel' => array(
				'de' => 'Kunde %s',
			),
			'inputType' => 'list',
			'fields' => array(
				'name' => array(
					'label' => array(
						'de' => array('Kundenname', 'Kundenname, wird automatisch Groß ausgegeben'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'url' => array(
							'label' => array(
								'de' => array('Link', 'Wenn gewünscht - Kundenwebsite: www.firma.de'),
							),
							'inputType' => 'text',
							'eval' => array('tl_class' => 'w50'),
				),
			),
		),
	),
);
