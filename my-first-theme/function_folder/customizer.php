<?php
//テーマのカスタマイズ
function my_customize( $wp_customize ) {
  $wp_customize->add_panel(
    'my_panel_header',
    array(
      'title'    => 'Header_info',
      'priority' => 1,
    )
  );

  $wp_customize->add_section(
    'my_section_header_CompanyInfo',
    array(
      'title'    => '会社情報',
      'panel'    => 'my_panel_header',
      'priority' => 1,
    )
  );
  $wp_customize->add_setting('my_setting_header_CompanyInfo_phone');
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'my_control_header_CompanyInfo_phone',
      array(
        'label'    => '電話番号',
        'section'  => 'my_section_header_CompanyInfo',
        'settings' => 'my_setting_header_CompanyInfo_phone',
        'priority' => 1,
        'type'     => 'text',
      )
      )
  );
    $wp_customize->add_setting('my_setting_header_CompanyInfo_dayoff');
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'my_control_header_CompanyInfo_dayoff',
        array(
          'label'    => '定休日',
          'section'  => 'my_section_header_CompanyInfo',
          'settings' => 'my_setting_header_CompanyInfo_dayoff',
          'priority' => 2,
          'type'     => 'text',
          )
          )
    );
    $wp_customize->add_section(
      'my_section_header_inquiry',
      array(
        'title'    => 'お問い合わせ',
        'panel'    => 'my_panel_header',
        'priority' => 1,
      )
    );
    $wp_customize->add_setting('my_setting_header_inquiry');
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'my_control_header_inquiry',
        array(
          'label'    => 'お問い合わせ',
          'section'  => 'my_section_header_inquiry',
          'settings' => 'my_setting_header_inquiry',
          'priority' => 2,
          'type'     => 'text',
        )
        )
    );

      $wp_customize->add_panel(
        'my_panel_inquiryform',
        array(
          'title'    => 'inquiry_message',
          'priority' => 2,
        )
      );
      $wp_customize->add_section(
        'my_section_inquiryform',
        array(
          'title'    => 'inquiry_message',
          'panel'    => 'my_panel_inquiryform',
          'priority' => 1,
        )
      );
      $wp_customize->add_setting('my_setting_inquiryform');
      $wp_customize->add_control(
        new WP_Customize_Control(
          $wp_customize,
          'my_control_inquiryform',
          array(
            'label'    => 'inquiry_message',
            'section'  => 'my_section_inquiryform',
            'settings' => 'my_setting_inquiryform',
            'priority' => 1,
            'type'     => 'text',
          )
          )
        );

      $wp_customize->add_panel(
        'my_panel_footer',
        array(
          'title'    => 'Footer_info',
          'priority' => 3,
        )
      );
      $wp_customize->add_section(
        'my_section_footer_CompanyInfo',
        array(
          'title'    => '会社情報',
          'panel'    => 'my_panel_footer',
          'priority' => 1,
        )
      );
      $wp_customize->add_setting('my_setting_footer_CompanyInfo_phone');
      $wp_customize->add_control(
        new WP_Customize_Control(
          $wp_customize,
          'my_control_footer_CompanyInfo_phone',
          array(
            'label'    => '電話番号',
            'section'  => 'my_section_footer_CompanyInfo',
            'settings' => 'my_setting_footer_CompanyInfo_phone',
            'priority' => 1,
            'type'     => 'text',
          )
          )
      );
      $wp_customize->add_setting('my_setting_footer_CompanyInfo_dayoff');
      $wp_customize->add_control(
        new WP_Customize_Control(
          $wp_customize,
          'my_control_footer_CompanyInfo_dayoff',
          array(
            'label'    => '定休日',
            'section'  => 'my_section_footer_CompanyInfo',
            'settings' => 'my_setting_footer_CompanyInfo_dayoff',
            'priority' => 2,
            'type'     => 'text',
          )
          )
      );
      $wp_customize->add_section(
        'my_section_footer_SNS',
        array(
          'title'    => 'SNS',
          'panel'    => 'my_panel_footer',
          'priority' => 2,
        )
      );
      $wp_customize->add_setting('my_setting_footer_SNS_twitter');
      $wp_customize->add_control(
        new WP_Customize_Control(
          $wp_customize,
          'my_control_footer_SNS_twitter',
          array(
            'label'    => 'Twitter',
            'section'  => 'my_section_footer_SNS',
            'settings' => 'my_setting_footer_SNS_twitter',
            'priority' => 3,
            'type'     => 'text',
          )
          )
      );
      $wp_customize->add_setting('my_setting_footer_SNS_facebook');
      $wp_customize->add_control(
        new WP_Customize_Control(
          $wp_customize,
          'my_control_footer_SNS_facebook',
          array(
            'label'    => 'Facebook',
            'section'  => 'my_section_footer_SNS',
            'settings' => 'my_setting_footer_SNS_facebook',
            'priority' => 4,
            'type'     => 'text',
          )
          )
      );
      $wp_customize->add_section(
        'my_section_footer_inquiry',
        array(
          'title'    => 'お問い合わせ',
          'panel'    => 'my_panel_footer',
          'priority' => 3,
        )
      );
      $wp_customize->add_setting('my_setting_footer_inquiry');
      $wp_customize->add_control(
        new WP_Customize_Control(
          $wp_customize,
          'my_control_footer_inquiry',
          array(
            'label'    => 'お問い合わせ',
            'section'  => 'my_section_footer_inquiry',
            'settings' => 'my_setting_footer_inquiry',
            'priority' => 2,
            'type'     => 'text',
          )
          )
      );
      $wp_customize->add_section(
        'my_section_footer_copyright',
        array(
          'title'    => 'copyright',
          'panel'    => 'my_panel_footer',
          'priority' => 4,
        )
      );
      $wp_customize->add_setting('my_setting_footer_copyright');
      $wp_customize->add_control(
        new WP_Customize_Control(
          $wp_customize,
          'my_control_footer_copyright',
          array(
            'label'    => 'copyright',
            'section'  => 'my_section_footer_copyright',
            'settings' => 'my_setting_footer_copyright',
            'priority' => 1,
            'type'     => 'text',
          )
          )
        );


      // $wp_customize->add_panel(
      //   'my_panel_MainVisual',
      //   array(
      //     'title'    => 'MainVisual',
      //     'priority' => 3,
      //   )
      // );
      //
      // $wp_customize->add_section(
      //   'my_section_MainVisual',
      //   array(
      //     'title'    => 'MainVisual_image',
      //     'panel'    => 'my_panel_MainVisual',
      //     'priority' => 1,
      //   )
      // );
      // $wp_customize->add_setting( 'my_setting_MainVisual' );
      // $wp_customize->add_control(
      //   new WP_Customize_Image_Control(
      //     $wp_customize,
      //     'my_control_image',
      //     array(
      //       'label'    => 'MainVisual_image',
      //       'section'  => 'my_section_MainVisual',
      //       'settings' => 'my_setting_MainVisual',
      //     )
      //     )
      //   );

}
add_action( 'customize_register', 'my_customize' );
