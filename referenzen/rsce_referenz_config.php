<?php

return array(
	'label' => array(
		'de' => array(
			'Referenzen',
			'Liste von Referenzen',
		),
	),
	'types' => array('content'),
	'contentCategory' => 'texts',
	'fields' => array(
		'referenzen' => array(
			'label' => array(
				'de' => array(
					'Referenzen',
					'Fügen Sie eine beliebige Anzahl an Referenzen ein.',
				),
			),
			'elementLabel' => array(
				'de' => 'Referenz %s',
			),
			'inputType' => 'list',
			'fields' => array(
				'name' => array(
					'label' => array(
						'de' => array('Referenz', 'Referenzname'),
					),
					'inputType' => 'text',
				),
				'spruch' => array(
							'label' => array(
								'de' => array('Aussage', 'Spruch'),
							),
							'inputType' => 'text',
				),
			),
		),
	),
);
