<?php

namespace Hostinger\Surveys;

defined( 'ABSPATH' ) || exit;

class Questions {
	public function map_survey_questions( string $slug ): array {

		$questions = array(
			'score'   => array(
				'type'                      => 'rating',
				'question'                  => __( 'How would you rate your experience using our AI Assistant plugin for content generation? (Scale 1-10)', 'hostinger' ),
				'woo_question'              => __( 'How would you rate your experience setting up a WooCommerce site on our hosting?', 'hostinger' ),
				'ai_question'               => __( 'How would you rate your experience using our AI content generation tools in onboarding? (Scale 1-10)', 'hostinger' ),
				'affiliate_question'        => __( 'How would you rate your experience publishing Amazon Affiliate links?', 'hostinger' ),
				'prebuild_website_question' => __( 'How would you rate your experience building a website based on a pre-built template? (Score 1-10)', 'hostinger' ),
			),
			'comment' => array(
				'type'                      => 'comment',
				'question'                  => __( 'Do you have any comments/suggestions to improve our AI tools?', 'hostinger' ),
				'woo_question'              => __( 'Do you have any comments/suggestions to improve our WooCommerce onboarding?', 'hostinger' ),
				'ai_question'               => __( 'Do you have any comments/suggestions to improve our AI tools?', 'hostinger' ),
				'affiliate_question'        => __( 'How could we improve the Amazon Affiliate plugin and theme?', 'hostinger' ),
				'prebuild_website_question' => __( 'How could we make it easier to create a new WordPress website?', 'hostinger' ),
			),
		);

		if ( isset( $questions[ $slug ] ) ) {
			return $questions[ $slug ];
		}

		return array();
	}
}

new Questions();
