register_post_type( 're',
		array ( 
			'labels' => array(
				'name' 				=> __( 'Nhà đất', 'willgroup' ),
				'singular_name' 	=> __( 'Nhà đất', 'willgroup' ),
				'menu_name' 		=> __( 'Nhà đất', 'willgroup' ),
				'name_admin_bar'    => __( 'Nhà đất', 'willgroup' ),
				'all_items'			=> __( 'Tất cả nhà đất', 'willgroup' ),
				'add_new' 			=> __( 'Thêm nhà đất', 'willgroup' ),
				'add_new_item' 		=> __( 'Thêm nhà đất', 'willgroup' ),
				'edit_item' 		=> __( 'Sửa nhà đất', 'willgroup' ),
			),
			'description' 		=> __( 'Nhà đất', 'willgroup' ),
			'menu_position' 	=> 5,
			'menu_icon' 		=> 'dashicons-admin-multisite',
			'capability_type' 	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> 'nha-dat',
			'supports' 			=> array( 'title', 'thumbnail', 'editor' ),
			'rewrite' 			=> array( 'slug' => 'nha-dat' ),
		)
	);
	
	/**
	 * Add re_cat post type
	 */
	register_post_type( 're_cat',
		array ( 
			'labels' => array(
				'name' 				=> __( 'Loại nhà đất', 'willgroup' ),
				'singular_name' 	=> __( 'Loại nhà đất', 'willgroup' ),
				'menu_name' 		=> __( 'Loại nhà đất', 'willgroup' ),
				'name_admin_bar'    => __( 'Loại nhà đất', 'willgroup' ),
				'all_items'			=> __( 'Tất cả loại nhà đất', 'willgroup' ),
				'add_new' 			=> __( 'Thêm loại nhà đất', 'willgroup' ),
				'add_new_item' 		=> __( 'Thêm loại nhà đất', 'willgroup' ),
				'edit_item' 		=> __( 'Sửa loại nhà đất', 'willgroup' ),
			),

			'description' 		=> __( 'Loại nhà đất', 'willgroup' ),
			'menu_position' 	=> 6,
			'menu_icon' 		=> 'dashicons-tag',
			'capability_type' 	=> 'page',
			'hierarchical'		=> true,
			'public' 			=> true,
			'has_archive' 		=> true,
			'supports' 			=> array( 'title','custom-fields', 'editor', 'page-attributes' ),
			'rewrite' 			=> array( 'with_front' => false ),
		)
	);
	
	/**
	 * Add re_loc post type
	 */
	register_post_type( 're_loc',
		array ( 
			'labels' => array(
				'name' 				=> __( 'Vị trí', 'willgroup' ),
				'singular_name' 	=> __( 'Vị trí', 'willgroup' ),
				'menu_name' 		=> __( 'Vị trí', 'willgroup' ),
				'name_admin_bar'    => __( 'Vị trí', 'willgroup' ),
				'all_items'			=> __( 'Tất cả vị trí', 'willgroup' ),
				'add_new' 			=> __( 'Thêm vị trí', 'willgroup' ),
				'add_new_item' 		=> __( 'Thêm vị trí', 'willgroup' ),
				'edit_item' 		=> __( 'Sửa vị trí', 'willgroup' ),
			),


			'description' 		=> __( 'Vị trí', 'willgroup' ),
			'menu_position' 	=> 7,
			'menu_icon' 		=> 'dashicons-location',
			'capability_type' 	=> 'page',
			'hierarchical'		=> true,
			'public' 			=> true,
			'has_archive' 		=> true,
			'supports' 			=> array( 'title', 'page-attributes' ),
			'rewrite' 			=> true,
		)
	);
	
	/**
	 * Add re_demand taxonomy
	 */
	register_taxonomy( 're_demand', array( 're', 're_cat', 're_loc' ), 
		array(
			'labels'            => array(
				'name'              => __( 'Nhu cầu', 'willgroup' ),
				'singular_name'     => __( 'Nhu cầu', 'willgroup' ),
				'search_items'      => __( 'Tìm kiếm nhu cầu', 'willgroup' ),
				'all_items'         => __( 'Tất cả nhu cầu', 'willgroup' ),
				'parent_item'       => __( 'Nhu cầu cha', 'willgroup' ),
				'parent_item_colon' => __( 'Nhu cầu cha:', 'willgroup' ),
				'edit_item'         => __( 'Sửa nhu cầu', 'willgroup' ),
				'update_item'       => __( 'Cập nhật nhu cầu', 'willgroup' ),
				'add_new_item'      => __( 'Thêm nhu cầu', 'willgroup' ),
				'new_item_name'     => __( 'Tên nhu cầu', 'willgroup' ),
				'menu_name'         => __( 'Nhu cầu', 'willgroup' ),
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_admin_column' => true,
		) 
	);
