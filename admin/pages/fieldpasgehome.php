<?php

function cmb2_field_home(){

    //================================ SLIDER BANNER ===========================================
    $cmb2_slider = new_cmb2_box([
        'id' => 'slider',
        'title' => 'Slider Banner',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
        'closed' => false
    ]);
    $slider_uni = $cmb2_slider->add_field([
        'id'          => 'slider_banner',
        'type'        => 'group',
        'description' => __( 'Adicione abaixo os banners', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Banner {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Banner', 'cmb2' ),
            'remove_button'     => __( 'Remove Banner', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ]);


    $cmb2_slider->add_group_field($slider_uni, [
        'id' => 'banner_img',
        'name' => 'Imagem',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add Imagem' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            //'type' => 'application/pdf', // Make library only display PDFs.
            // Or only allow gif, jpg, or png images
            'type' => array(
                 'image/gif',
                 'image/jpeg',
                 'image/png',
             ),
        )
    ]);
    $cmb2_slider->add_group_field($slider_uni, [
        'id' => 'banner_link',
        'name' => 'Link do banner',
        'type' => 'text_url'
    ]);



    //========================= DEPOIMENTOS ================================================
    $cmb2_depoimentos = new_cmb2_box([
        'id' => 'dep',
        'title' => 'Depoimentos',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
        'closed' => false
    ]);
    $dep_uni = $cmb2_depoimentos->add_field([
        'id'          => 'depoimentos_home',
        'type'        => 'group',
        'description' => __( 'Adicione abaixo os depoimentos', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Depoimento {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add depoimento', 'cmb2' ),
            'remove_button'     => __( 'Remove Depoimento', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ]);
    $cmb2_depoimentos->add_group_field($dep_uni, array(
        'name'    => 'Imagem',
        'desc'    => 'Adicione uma imagem',
        'id'      => 'dep_img',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add Imagem' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            //'type' => 'application/pdf', // Make library only display PDFs.
            // Or only allow gif, jpg, or png images
            'type' => array(
                 'image/gif',
                 'image/jpeg',
                 'image/png',
             ),
        ),
        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );
    $cmb2_depoimentos->add_group_field($dep_uni, [
        'id' => 'dep_nome',
        'name' => 'Nome',
        'type' => 'text'
    ]);
    $cmb2_depoimentos->add_group_field($dep_uni, [
        'id' => 'dep_text',
        'name' => 'Depoimento',
        'type' => 'textarea',
        'desc' => 'Limitado a 125 caracteres',
        'attributes' => [
            'maxlength' => '125',
            'rows' => 5
        ]
    ]);



    $cmb2_whatsapp = new_cmb2_box([
        'id' => 'whatsapp',
        'title' => 'Whatsapp',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
        'closed' => false
    ]);
    $cmb2_whatsapp->add_field([
        'id' => 'number_whatsapp',
        'name' => 'Número do Whatsapp',
        'desc' => 'Adicione aqui o número do Whatsapp<br><strong>Esse número será adiconado nos botões de contato da página Home</strong>',
        'type' => 'text'
    ]);
    $cmb2_whatsapp->add_field([
        'id' => 'msg_whatsapp',
        'name' => 'Mensagem Whatsapp',
        'desc' => 'Essa mensagem é exibida junto ao link de contato do whatsapp',
        'type' => 'text'
    ]);

}
add_action('cmb2_admin_init', 'cmb2_field_home');