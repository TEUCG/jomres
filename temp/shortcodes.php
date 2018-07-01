<?php
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################

$this->shortcodes = array (
  '06000' => 
  array (
    0 => 
    array (
      'task' => 'ajax_search',
      'info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_INFO',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'ajs_plugin',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_AJS_PLUGIN',
          'arg_example' => 'ajax_search_composite',
        ),
        1 => 
        array (
          'argument' => 'asc_template_style',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_STYLE',
          'arg_example' => 'multiselect',
        ),
        2 => 
        array (
          'argument' => 'view_on_property_details',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_PROPERTY_DETAILS',
          'arg_example' => '0',
        ),
        3 => 
        array (
          'argument' => 'property_uids',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_PRE_FILTER_PROPERTY_UIDS',
          'arg_example' => '1,3,7,84,6',
        ),
        4 => 
        array (
          'argument' => 'ptypes',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_PRE_FILTER_PTYPES',
          'arg_example' => '12,4,34',
        ),
        5 => 
        array (
          'argument' => 'prefilter_country_code',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_PRE_FILTER_COUNTRY',
          'arg_example' => 'GB,FR',
        ),
        6 => 
        array (
          'argument' => 'region',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_PRE_FILTER_REGION',
          'arg_example' => 'Avon,Somerset',
        ),
        7 => 
        array (
          'argument' => 'asc_by_stars',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_SHOW_PRICE',
          'arg_example' => '1',
        ),
        8 => 
        array (
          'argument' => 'asc_by_price',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_SHOW_PRICE',
          'arg_example' => '1',
        ),
        9 => 
        array (
          'argument' => 'asc_by_features',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_SHOW_FEATURES',
          'arg_example' => '1',
        ),
        10 => 
        array (
          'argument' => 'asc_by_country',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_SHOW_COUNTRY',
          'arg_example' => '1',
        ),
        11 => 
        array (
          'argument' => 'asc_by_region',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_SHOW_REGION',
          'arg_example' => '1',
        ),
        12 => 
        array (
          'argument' => 'asc_by_town',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_SHOW_TOWN',
          'arg_example' => '1',
        ),
        13 => 
        array (
          'argument' => 'asc_by_roomtype',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_SHOW_ROOMTYPE',
          'arg_example' => '1',
        ),
        14 => 
        array (
          'argument' => 'asc_by_propertytype',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_SHOW_PROPERTY_TYPE',
          'arg_example' => '1',
        ),
        15 => 
        array (
          'argument' => 'asc_by_guestnumber',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_SHOW_GUESTNUMBER',
          'arg_example' => '1',
        ),
        16 => 
        array (
          'argument' => 'asc_by_date',
          'arg_info' => '_JOMRES_SHORTCODES_06000AJSCOMPOSITE_ARG_SHOW_DATE',
          'arg_example' => '1',
        ),
      ),
    ),
    1 => 
    array (
      'task' => 'api_documentation',
      'info' => '_JOMRES_SHORTCODES_06000API_CORE_DOCS',
      'arguments' => 
      array (
      ),
    ),
    2 => 
    array (
      'task' => 'asamodule_random',
      'info' => '_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'asamodule_random_listlimit',
          'arg_info' => '_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT',
          'arg_example' => '10',
        ),
        1 => 
        array (
          'argument' => 'asamodule_random_ptype_ids',
          'arg_info' => '_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS',
          'arg_example' => '1,3',
        ),
        2 => 
        array (
          'argument' => 'asamodule_random_vertical',
          'arg_info' => '_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL',
          'arg_example' => '0',
        ),
      ),
    ),
    3 => 
    array (
      'task' => 'compare',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uids',
          'arg_info' => '_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS',
          'arg_example' => '12,8,7',
        ),
      ),
      'info' => '_JOMRES_SHORTCODES_06000COMPARE',
    ),
    4 => 
    array (
      'task' => 'contactowner',
      'info' => '_JOMRES_SHORTCODES_06000CONTACTOWNER',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID',
          'arg_example' => '18',
        ),
      ),
    ),
    5 => 
    array (
      'task' => 'extended_maps',
      'info' => '_JOMRES_SHORTCODES_06000EXTENDED_MAPS',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'ptype_ids',
          'arg_info' => '_JOMRES_SHORTCODES_06000EXTENDED_MAPS_ARG_PTYPE_IDS',
          'arg_example' => '4,5,3',
        ),
        1 => 
        array (
          'argument' => 'show_properties',
          'arg_info' => '_JOMRES_SHORTCODES_06000EXTENDED_MAPS_ARG_SHOW_PROPERTIES',
          'arg_example' => '1',
        ),
        2 => 
        array (
          'argument' => 'show_events',
          'arg_info' => '_JOMRES_SHORTCODES_06000EXTENDED_MAPS_ARG_SHOW_EVENTS',
          'arg_example' => '1',
        ),
        3 => 
        array (
          'argument' => 'show_attractions',
          'arg_info' => '_JOMRES_SHORTCODES_06000EXTENDED_MAPS_ARG_SHOW_ATTRACTIONS',
          'arg_example' => '1',
        ),
        4 => 
        array (
          'argument' => 'country',
          'arg_info' => '_JOMRES_SHORTCODES_06000EXTENDED_MAPS_ARG_COUNTRY',
          'arg_example' => 'GB',
        ),
        5 => 
        array (
          'argument' => 'region',
          'arg_info' => '_JOMRES_SHORTCODES_06000EXTENDED_MAPS_ARG_REGION',
          'arg_example' => '1111',
        ),
        6 => 
        array (
          'argument' => 'town',
          'arg_info' => '_JOMRES_SHORTCODES_06000EXTENDED_MAPS_ARG_TOWN',
          'arg_example' => 'Torquay',
        ),
      ),
    ),
    6 => 
    array (
      'task' => 'featured_listings_asamodule_1',
      'info' => '_JOMRES_SHORTCODES_06000FEATURED_LISTINGS_ASAMODULE_1',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'limit',
          'arg_info' => '_JOMRES_SHORTCODES_06000FEATURED_LISTINGS_ASAMODULE_1_FEATURED_LISTINGS_ASAMODULE_1_limit',
          'arg_example' => '10',
        ),
        1 => 
        array (
          'argument' => 'ptype_ids',
          'arg_info' => '_JOMRES_SHORTCODES_06000FEATURED_LISTINGS_ASAMODULE_1_FEATURED_LISTINGS_ASAMODULE_1_ptype_ids',
          'arg_example' => '1,7',
        ),
      ),
    ),
    7 => 
    array (
      'task' => 'gdpr_my_data',
      'info' => '_JOMRES_GDPR_MY_DATA',
      'arguments' => 
      array (
      ),
    ),
    8 => 
    array (
      'task' => 'gdpr_my_data',
      'info' => '_JOMRES_GDPR_MY_DATA',
      'arguments' => 
      array (
      ),
    ),
    9 => 
    array (
      'task' => 'gdpr_my_data',
      'info' => '_JOMRES_GDPR_MY_DATA',
      'arguments' => 
      array (
      ),
    ),
    10 => 
    array (
      'task' => 'quick_register',
      'info' => 'QUICK_REGISTER_TITLE',
      'arguments' => 
      array (
      ),
    ),
    11 => 
    array (
      'task' => 'search',
      'info' => '_JOMRES_SHORTCODES_06000SEARCH',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'country',
          'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY',
          'arg_example' => 'GB',
        ),
        1 => 
        array (
          'argument' => 'region',
          'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION',
          'arg_example' => '1111',
        ),
        2 => 
        array (
          'argument' => 'town',
          'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN',
          'arg_example' => 'Torquay',
        ),
        3 => 
        array (
          'argument' => 'feature_uids',
          'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS',
          'arg_example' => '32',
        ),
        4 => 
        array (
          'argument' => 'room_type',
          'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE',
          'arg_example' => '2',
        ),
        5 => 
        array (
          'argument' => 'ptype',
          'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE',
          'arg_example' => '1',
        ),
        6 => 
        array (
          'argument' => 'priceranges',
          'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES',
          'arg_example' => '100-200',
        ),
        7 => 
        array (
          'argument' => 'guestnumber',
          'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER',
          'arg_example' => '1',
        ),
        8 => 
        array (
          'argument' => 'stars',
          'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS',
          'arg_example' => '4',
        ),
        9 => 
        array (
          'argument' => 'arrivalDate',
          'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE',
          'arg_example' => '2018/06/26',
        ),
        10 => 
        array (
          'argument' => 'departureDate',
          'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE',
          'arg_example' => '2018/06/27',
        ),
        11 => 
        array (
          'argument' => 'cat_id',
          'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY',
          'arg_example' => '1',
        ),
      ),
    ),
    12 => 
    array (
      'task' => 'show_cart',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_CART',
      'arguments' => 
      array (
      ),
    ),
    13 => 
    array (
      'task' => 'show_cart_module',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_CART_MODULE',
      'arguments' => 
      array (
      ),
    ),
    14 => 
    array (
      'task' => 'show_consent_form',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM',
    ),
    15 => 
    array (
      'task' => 'show_hotel_details',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID',
          'arg_example' => '5',
        ),
      ),
    ),
    16 => 
    array (
      'task' => 'show_main_menu',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU',
      'arguments' => 
      array (
      ),
    ),
    17 => 
    array (
      'task' => 'show_property_calendar',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
        1 => 
        array (
          'argument' => 'months_to_show',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW',
          'arg_example' => '4',
        ),
        2 => 
        array (
          'argument' => 'show_just_month',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH',
          'arg_example' => '1',
        ),
      ),
    ),
    18 => 
    array (
      'task' => 'show_property_description',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID',
          'arg_example' => '5',
        ),
      ),
    ),
    19 => 
    array (
      'task' => 'show_property_extras',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    20 => 
    array (
      'task' => 'show_property_features',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    21 => 
    array (
      'task' => 'show_property_header',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    22 => 
    array (
      'task' => 'show_property_main_image',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    23 => 
    array (
      'task' => 'show_property_map',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
        1 => 
        array (
          'argument' => 'map_zoom',
          'arg_info' => '_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM',
          'arg_example' => '10',
        ),
      ),
    ),
    24 => 
    array (
      'task' => 'show_property_moreinfo',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    25 => 
    array (
      'task' => 'show_property_qr_code_directions',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    26 => 
    array (
      'task' => 'show_property_reviews',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
        1 => 
        array (
          'argument' => 'reviews_limit',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT',
          'arg_example' => '3',
        ),
      ),
    ),
    27 => 
    array (
      'task' => 'show_property_reviews_summary',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    28 => 
    array (
      'task' => 'show_property_room',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'id',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    29 => 
    array (
      'task' => 'show_property_room_types',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    30 => 
    array (
      'task' => 'show_property_rooms',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    31 => 
    array (
      'task' => 'show_property_rooms_slideshow',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    32 => 
    array (
      'task' => 'show_property_slideshow',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    33 => 
    array (
      'task' => 'show_property_tariffs',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    34 => 
    array (
      'task' => 'show_property_weather',
      'info' => '_CURRENT_WEATHER',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID',
          'arg_example' => '1',
        ),
      ),
    ),
    35 => 
    array (
      'task' => 'show_shortlisted_properties',
      'info' => '_JOMRES_SHORTCODES_06000SHORTLIST',
      'arguments' => 
      array (
      ),
    ),
    36 => 
    array (
      'task' => 'show_site_business',
      'info' => '_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS',
      'arguments' => 
      array (
      ),
    ),
    37 => 
    array (
      'task' => 'stepz',
      'info' => '_JOMRES_SHORTCODES_06000STEPZ',
      'arguments' => 
      array (
      ),
    ),
    38 => 
    array (
      'task' => 'terms',
      'info' => '_JOMRES_SHORTCODES_06000TERMS',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
      ),
    ),
    39 => 
    array (
      'task' => 'ui_availability_calendar',
      'info' => '_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
        1 => 
        array (
          'argument' => 'noshowlegend',
          'arg_info' => '_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND',
          'arg_example' => '1',
        ),
      ),
    ),
    40 => 
    array (
      'task' => 'view_agent',
      'info' => '_JOMRES_SHORTCODES_06000VIEW_AGENT',
      'arguments' => 
      array (
        0 => 
        array (
          'argument' => 'property_uid',
          'arg_info' => '_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID',
          'arg_example' => '1',
        ),
        1 => 
        array (
          'argument' => 'id',
          'arg_info' => '_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID',
          'arg_example' => '1',
        ),
      ),
    ),
    41 => 
    array (
      'task' => 'webhooks_core_documentation',
      'info' => '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS',
      'arguments' => 
      array (
      ),
    ),
  ),
  '06001' => 
  array (
    0 => 
    array (
      'task' => 'cpanel',
      'arguments' => 
      array (
      ),
      'info' => '_JOMRES_SHORTCODES_06001CPANEL',
    ),
    1 => 
    array (
      'task' => 'dashboard',
      'arguments' => 
      array (
      ),
      'info' => '_JOMRES_SHORTCODES_06001DASHBOARD',
    ),
    2 => 
    array (
      'task' => 'dashboard',
      'arguments' => 
      array (
      ),
      'info' => '_JOMRES_SHORTCODES_06001DASHBOARD',
    ),
  ),
  '06002' => 
  array (
    0 => 
    array (
      'task' => 'webhooks_core',
      'info' => '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN',
      'arguments' => 
      array (
      ),
    ),
  ),
  '06005' => 
  array (
    0 => 
    array (
      'task' => 'new_property',
      'info' => '_JOMRES_SHORTCODES_06005NEW_PROPERTY',
      'arguments' => 
      array (
      ),
    ),
    1 => 
    array (
      'task' => 'oauth',
      'info' => '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN',
      'arguments' => 
      array (
      ),
    ),
  ),
);
