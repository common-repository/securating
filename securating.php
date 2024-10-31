<?php
/**
 * Plugin Name: Securating
 * Plugin URI: http://securating.com/plugin/wordpress
 * Description: Securating permet l'affichage de vos avis clients sur votre site. Avec l'offre, gratuite commencez immédiatement la collecte, tout en restant maitre de leur diffusion.
 * Version: 1.7
 * Author: Securating
 * Author URI: http://securating.com
 */

define('DEFAULT_WIDGET_PARAMS_LIST', 'hide_reviews,hide_more_link,hide_schema,hide_total,hide_logo,hide_host,hide_title,hide_name,hide_distribution,show_stars_rating,show_stars_total,hide_identity');
define('DEFAULT_WIDGET_PARAMS_TOP','hide_reviews,hide_more_link,hide_title,hide_identity');
define('DEFAULT_WIDGET_PARAMS_BOTTOM','hide_overview,hide_more_link,hide_identity');



/**
 * securating_getLabels()
 * setup the labels regarding to the language
 */
function securating_getLabels($lg){
    $securatingLabels=array();
    $securatingLabels['fr']['title']='Réglages du module';

    $securatingLabels['fr']['label_warning']='Le serveur de Securating retourne le message suivant';
    $securatingLabels['fr']['label_warning_file_missing']='La clé de vérification n\'a pas encore été déposée sur votre serveur';
    $securatingLabels['fr']['label_warning_key_not_verified']='La clé de vérification n\'a pas pu être vérifié pour votre site.';
    $securatingLabels['fr']['label_warning_key_verified']='Votre site est bien activé avec la clé de vérification.';

    $securatingLabels['fr']['label_widget_version']='Version du widget';
    $securatingLabels['fr']['help_widget_version']='Précisez la version du widget à utiliser pour (v1,v2,v3,v4,etc) ou laisser vide pour utiliser la dernière version';


    $securatingLabels['fr']['update_ok']='Votre demande a bien été prise en compte';
    $securatingLabels['fr']['update_nok']='Attention, votre demande n\'a pas pu être prise en compte';

    $securatingLabels['fr']['create_ok']='La création de votre compte a bien été effectuée, vous devriez avoir reçu un email de validation pour y accéder.';
    $securatingLabels['fr']['create_nok_1']='Attention,';
    $securatingLabels['fr']['create_nok_2']='la création de votre compte n\'a pas pu être effectuée.';
    $securatingLabels['fr']['create_nok_3']='Merci de vérifier vos paramètres.';

    $securatingLabels['fr']['verification_ok']='La vérification de votre site internet été effectuée, vous pouvez débuter la collecte et la diffusion de vos avis clients.';

    $securatingLabels['fr']['verification_nok_1']='Attention,';
    $securatingLabels['fr']['verification_nok_2']='la vérification de votre site internet n\'a pas pu être effectuée.';
    $securatingLabels['fr']['verification_nok_3']='Merci de vérifier vos paramètres.';
    $securatingLabels['fr']['verification_nok_4']='Vous pouvez aussi réaliser cette vérification manuellement depuis le Manager de Securating.';

    $securatingLabels['fr']['missing_token']='Attention, vous devez renseigner un clé';
    $securatingLabels['fr']['invalid_token']='Attention, vous devez renseigner une clé valide';

    $securatingLabels['fr']['label_send']='Enregistrer les modifications';
    $securatingLabels['fr']['label_token']='Clé de vérification';
    $securatingLabels['fr']['help_token']='Votre clé est disponible depuis votre manager Securating dans la rubrique Sites';
    $securatingLabels['fr']['help_link']='https://manager.securating.com';

    $securatingLabels['fr']['label_oui']='Oui';
    $securatingLabels['fr']['label_non']='Non';

    $securatingLabels['fr']['help_access_intro'] = 'Le plugin Securating, vous permet d\'intégrer à votre site Internet les éléments suivants :';
    $securatingLabels['fr']['help_access_el'][1] = 'Le menu social de Securating';
    $securatingLabels['fr']['help_access_el'][2] = 'Les widgets contenant les notes et les commentaires clients';
    $securatingLabels['fr']['help_access_el'][3] = 'Le sticker d\'accès à votre attestation Securating';
    $securatingLabels['fr']['help_access_el'][3] = 'Les AggregateRating data permettant les étoiles dans les moteurs de recherches';

    $securatingLabels['fr']['help_access_last']  = 'L\'accès à votre compte de modération se fait simplement via un back-office accessible depuis l\'url ';


    $securatingLabels['fr']['label_params_not_created']  = 'Création gratuite et immédiate de votre compte Securating';
    $securatingLabels['fr']['label_params_created']  = 'Statut de l\'interconnexion de votre Site Internet avec Securating';
    $securatingLabels['fr']['securating_create_email']  = 'Email à utiliser';
    $securatingLabels['fr']['help_securating_create_email']  = 'Cet email est uniquement utilisé pour la création de votre compte Securating';
    $securatingLabels['fr']['securating_create_website']  = 'Site Internet';
    $securatingLabels['fr']['help_securating_create_website']  = 'Ce nom de domaine sera activé sur votre compte';
    $securatingLabels['fr']['label_create_my_account']  = 'Créer mon compte maintenant';
    $securatingLabels['fr']['label_create_my_exists']  = 'J\'ai déjà un compte';

    $securatingLabels['fr']['securating_website']  = 'Site Internet';
    $securatingLabels['fr']['help_securating_website']  = 'Ce nom de domaine associé au token votre compte';


    $securatingLabels['fr']['label_params_menu_social']='Apparence du menu Social';
    $securatingLabels['fr']['label_menu_active']='Le menu est visible';
    $securatingLabels['fr']['help_menu_active']='Rendre visible le menu Social de Securating sur votre site.';
    $securatingLabels['fr']['label_menu_theme']='Design par défaut';
    $securatingLabels['fr']['help_menu_theme']='Choisissez le design du menu.';
    $securatingLabels['fr']['label_menu_accent']='Ambiance par défaut';
    $securatingLabels['fr']['help_menu_accent']='Choisissez la palette de couleur du menu.';
    $securatingLabels['fr']['label_menu_locale']='Langue par défaut';
    $securatingLabels['fr']['help_menu_locale']='Choisissez la langue par défaut du menu.';
    $securatingLabels['fr']['label_menu_menuxy']='Positions X et Y en %';
    $securatingLabels['fr']['help_menu_menuxy']='Choisissez l\'emplacement par défaut du menu.';

    $securatingLabels['fr']['label_company']='Compte Securating';
    $securatingLabels['fr']['help_company']='Ce numéro de compte est chargé automatiquement depuis les serveurs de Securating lorsque votre clé a pu être validée.';



    $securatingLabels['fr']['label_params_optimization']='Optimisations des performances';

    $securatingLabels['fr']['label_use_cache']='Cache local des Widgets';
    $securatingLabels['fr']['help_use_cache']='Utiliser le cache local pour stocker les Widgets de Securating';

    $securatingLabels['fr']['label_params_sticker']='Apparence du Sticker';


    $securatingLabels['fr']['label_show_sticker']='Le sticker est visible';
    $securatingLabels['fr']['help_show_sticker']='Rendre le sticker de Securating visible sur votre site.';

    $securatingLabels['fr']['label_sticker_modele']='Design du Sticker';
    $securatingLabels['fr']['help_sticker_modele']='les valeurs possibles ont r1,r2 et r2.1';

    $securatingLabels['fr']['label_sticker_class']='Position du Sticker';
    $securatingLabels['fr']['top_right']='En haut à droite';
    $securatingLabels['fr']['top_left']='En haut à gauche';
    $securatingLabels['fr']['bottom_left']='En bas à gauche';
    $securatingLabels['fr']['bottom_right']='En bas à droite';
    $securatingLabels['fr']['help_sticker_class']='Positionne le sticker de Securating dans la page';

    //-- PRODUCTS
    $securatingLabels['fr']['label_params_product']='Affichage de la note et des avis sur la fiche produit';

    $securatingLabels['fr']['label_show_review_in_product_top']='Entête de la fiche produit';
    $securatingLabels['fr']['help_show_review_in_product_top']='Permet l\'affichage des avis dans l\'entête de la fiche produit';

    $securatingLabels['fr']['label_show_review_in_product_bottom']='Détails de la fiche produit';
    $securatingLabels['fr']['help_show_review_in_product_bottom']='Permet l\'affichage des avis dans le détails de la fiche produit';

    $securatingLabels['fr']['label_params_product_list']='Affichage des notes dans les catégories de produits';

    $securatingLabels['fr']['label_show_review_in_product_list']='Note sous le produit';
    $securatingLabels['fr']['help_show_review_in_product_list']='Permet d\'afficher ou non les petites étoiles dans le catégorie de produits';

    $securatingLabels['fr']['label_widget_details']='Paramétrage de votre widget';
    $securatingLabels['fr']['help_widget_details']='Forcez ici les paramètres du widget';

    $securatingLabels['fr']['label_widget_css']='Css à ajouter à votre widget';
    $securatingLabels['fr']['help_widget_css']='Surchargez le Css votre widget';


    //-- ORDERS
    $securatingLabels['fr']['label_params_order']='Lancement des invitations après une commande';


    $securatingLabels['fr']['label_securating_collect']='Envoi automatique';
    $securatingLabels['fr']['help_securating_collect']='Permet l\'envoi automatique des invitations de dépose avis après les commandes';


    $securatingLabels['fr']['label_invitation_url']='Url from where to collect';
    $securatingLabels['fr']['help_invitation_url']='Permet de renseigner la page web de votre site qui collectera l\'avis de votre client';

    $securatingLabels['fr']['label_invitation_companyname']='Nom à afficher';
    $securatingLabels['fr']['help_invitation_companyname']='Permet de personnaliser le nom de l\'entreprise à l\'origine de l\'invitation.';

    $securatingLabels['fr']['label_invitation_days']='Délais avant envoi';
    $securatingLabels['fr']['help_invitation_days']='Permet d\'indiquer un nombre de jours d\'attente avant l\'envoi du mail d\'invitation';

    $securatingLabels['fr']['label_invitation_webhook']='Url WebHook';
    $securatingLabels['fr']['help_invitation_webhook']='Url qui sera appeler lors d\'une action de votre client en lien avec l\'invitation.';

    $securatingLabels['fr']['help_widget']='Le widgets de Securating est intégrable avec le shortcode suivant: [securating_widget].';
    

    if(!isset($securatingLabels[$lg])) {
        $lg = 'fr' ;
    }
    return($securatingLabels[$lg]);
}

function securating_httpPost($url, $data)
    {
        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];
        $context = stream_context_create($options);
        try {
            return file_get_contents($url, false, $context);
        } catch (Exception $e) {
            return false;
        }
    }

/**
     * securating_file_get_from_cache()
     * Retrieve widget from local cache if requested
*/
function securating_file_get_from_cache($url, $data) {
    $widget = '' ;

    $useCache =  get_option( 'securating_use_cache' , '' );
    $hash = hash('sha512' , $url ) ;
    $cacheFile = securating_wp_config_path() . sanitize_file_name('/cache/'. 'securating-'.$hash.'.cache');

    if($useCache == 'oui') {
        $cacheReload=true;
        if(file_exists($cacheFile)) {
            $cacheTime = filemtime($cacheFile);
            $cacheReload = (($cacheTime===false)||(time()-$cacheTime>3600*24));
        }
        if($cacheReload)
        {
            $widget = @file_get_contents($url);
            @file_put_contents($cacheFile, $widget);
        } else {
            $widget = @file_get_contents($cacheFile);
        }
    } else {
        $widget = @file_get_contents($url);
        @unlink($cacheFile);
    }
    return $widget ;
}

/**
 * get_securating_token()
 * This function return the current Securating Token if exist
 */
function get_securating_token(){
    $token = get_option( 'securating_token' , '' );
    if(strlen($token)!=64) {
        $token = '';
    }
    return $token ;
}

/**
 * securating_wp_config_path()
 * Get the homedir path
 */
function securating_wp_config_path(){
    $base = dirname(__FILE__);
    $path = false;

    if (@file_exists(dirname(dirname($base))."/wp-config.php"))
    {
        $path = dirname(dirname($base));
    }
    else
        if (@file_exists(dirname(dirname(dirname($base)))."/wp-config.php"))
        {
            $path = dirname(dirname(dirname($base)));
        }
        else
            $path = false;

    if ($path != false)
    {
        $path = str_replace("\\", "/", $path);
    }
    return $path;
}

/**
 * securating_admin_main()
 * Main securating administration menu
 */
function securating_admin_main()
{
    $lg = 'fr';
    $labels = securating_getLabels($lg);

    //-- POST Actions
    $postAction = 'DISPLAY-DATA';
    if (isset($_POST['securating_admin_submit'])) {
        $postAction = 'UPDATE-DATA';
    }
    if (isset($_POST['securating_create_exists'])) {
        $postAction = 'DISPLAY-DATA';
    }
    if (isset($_POST['securating_create_now'])) {
        $postAction = 'CREATE-DATA';
    }
    switch ($postAction) {

        case 'CREATE-DATA':

            $data = [
                'securating_create_email' => sanitize_text_field($_POST['securating_create_email']),
                'securating_create_website' => sanitize_text_field(str_replace(['https://','http://'],'', $_POST['securating_create_website'])),
            ];
            //-- Create account on Securating Server
            if(securating_admin_create($data)) {
                echo '<p style="color:green;">'.esc_html($labels['create_ok']).'</p>';

                if(!empty($data['securating_token'])) {
                    //-- Save the return token on local web server
                    securating_save_token_verification_file($data['securating_token']);

                    //-- Request Securating to check that website & token a paired
                    if (securating_admin_verification(['securating_website' => $data['securating_website'],
                                                       'securating_token' => $data['securating_token']])) {
                        echo '<p style="color:green;">' . esc_html($labels['verification_ok']) . '</p>';
                    } else {
                        echo '<p style="color:red;">';
                        echo '<b>'.esc_html($labels['verification_nok_1']).'</b><br>';
                        echo esc_html($labels['verification_nok_2']).'<br>';
                        echo esc_html($labels['verification_nok_3']).'<br>';
                        echo esc_html($labels['verification_nok_4']).'<br>';
                        echo '</p>';
                    }
                }
            } else {
                echo '<p style="color:red;">';
                echo '<b>'.esc_html($labels['create_nok_1']).'</b><br>';
                echo esc_html($labels['create_nok_2']).'<br>';
                echo esc_html($labels['create_nok_3']).'<br>';
                echo '</p>';
            }
            //-- no break;

        case 'DISPLAY-DATA' :

            //-- LOAD DATA TO DISPLAY
            $data = [
                'securating_token' => get_option( 'securating_token' , '' ),
                'securating_company' => get_option( 'securating_company' , '' ),
                'securating_widget_version' => get_option( 'securating_widget_version' , '' ),
                'securating_website' => get_option( 'securating_website' , '' ),
                'securating_active' => get_option( 'securating_active' , '' ),
                'securating_theme' => get_option( 'securating_theme' , '' ),
                'securating_accent' => get_option( 'securating_accent' , '' ),
                'securating_locale' => get_option( 'securating_locale' , '' ),
                'securating_menux' => get_option( 'securating_menux' , '' ),
                'securating_menuy' => get_option( 'securating_menuy' , '' ),
                'securating_use_cache' => get_option( 'securating_use_cache' , '' ),
                'securating_show_sticker' => get_option( 'securating_show_sticker' , '' ),
                'securating_sticker_modele' => get_option( 'securating_sticker_modele' , '' ),
                'securating_sticker_class' => get_option( 'securating_sticker_class' , '' ),
                'securating_review_in_product_top' => get_option( 'securating_review_in_product_top' , '' ),
                'securating_review_in_product_top_params' => get_option( 'securating_review_in_product_top_params' , '' ),
                'securating_review_in_product_top_css' => get_option( 'securating_review_in_product_top_css' , '' ),
                'securating_review_in_product_bottom' => get_option( 'securating_review_in_product_bottom' , '' ),
                'securating_review_in_product_bottom_params' => get_option( 'securating_review_in_product_bottom_params' , '' ),
                'securating_review_in_product_bottom_css' => get_option( 'securating_review_in_product_bottom_css' , '' ),
                'securating_review_in_product_list' => get_option( 'securating_review_in_product_list' , '' ),
                'securating_review_in_product_list_params' => get_option( 'securating_review_in_product_list_params' , '' ),
                'securating_review_in_product_list_css' => get_option( 'securating_review_in_product_list_css' , '' ),

                'securating_collect' => get_option( 'securating_collect' , '' ),
                'securating_url' => get_option( 'securating_url' , '' ),
                'securating_company_name' => get_option( 'securating_company_name' , '' ),
                'securating_days' => get_option( 'securating_days' , '' ),
                'securating_webhook' => get_option( 'securating_webhook' , '' ),
                'securating_create_email' => '',
                'securating_create_website' => '',
            ];
            if(!empty($_POST['securating_create_email'])) {
                $data['securating_create_email'] = sanitize_text_field($_POST['securating_create_email']);
            }
            if(!empty($_POST['securating_create_website'])) {
                $data['securating_create_website'] = sanitize_text_field($_POST['securating_create_website']);
            }
            break;

        case 'UPDATE-DATA':

            //-- Fill the setup option to save
            $data = [
                'securating_token' => sanitize_text_field($_POST['securating_token']) ,
                'securating_company' => sanitize_text_field($_POST['securating_company']),
                'securating_widget_version' => sanitize_text_field($_POST['securating_widget_version']),
                'securating_website' => sanitize_text_field($_POST['securating_website']),
                'securating_active' => sanitize_text_field($_POST['securating_active']),
                'securating_theme' => sanitize_text_field($_POST['securating_theme']),
                'securating_accent' => sanitize_text_field($_POST['securating_accent']),
                'securating_locale' => sanitize_text_field($_POST['securating_locale']),
                'securating_menux' => sanitize_text_field($_POST['securating_menux']),
                'securating_menuy' => sanitize_text_field($_POST['securating_menuy']),
                'securating_use_cache' => sanitize_text_field($_POST['securating_use_cache']),
                'securating_show_sticker' => sanitize_text_field($_POST['securating_show_sticker']),
                'securating_sticker_modele' => sanitize_text_field($_POST['securating_sticker_modele']),
                'securating_sticker_class' => sanitize_text_field($_POST['securating_sticker_class']),

                'securating_review_in_product_top' => sanitize_text_field($_POST['securating_review_in_product_top']),
                'securating_review_in_product_top_params' => sanitize_text_field($_POST['securating_review_in_product_top_params']),
                'securating_review_in_product_top_css' => sanitize_text_field($_POST['securating_review_in_product_top_css']),
                'securating_review_in_product_bottom' => sanitize_text_field($_POST['securating_review_in_product_bottom']),
                'securating_review_in_product_bottom_params' => sanitize_text_field($_POST['securating_review_in_product_bottom_params']),
                'securating_review_in_product_bottom_css' => sanitize_text_field($_POST['securating_review_in_product_bottom_css']),
                'securating_review_in_product_list' => sanitize_text_field($_POST['securating_review_in_product_list']),
                'securating_review_in_product_list_params' => sanitize_text_field($_POST['securating_review_in_product_list_params']),
                'securating_review_in_product_list_css' => sanitize_text_field($_POST['securating_review_in_product_list_css']),

                'securating_collect' => sanitize_text_field($_POST['securating_collect']),
                'securating_url' => sanitize_text_field($_POST['securating_url']),
                'securating_company_name' => sanitize_text_field($_POST['securating_company_name']),
                'securating_days' => sanitize_text_field($_POST['securating_days']),
                'securating_webhook' => sanitize_text_field($_POST['securating_webhook']),

            ] ;
            if(securating_admin_save($data)) {
                echo '<p style="color:green;">'.esc_html($labels['update_ok']).'</p>';
            } else {
                echo '<p style="color:red;">'.esc_html($labels['update_nok']).'</p>';
            }
            break;

    }

    echo '<h1>'. esc_html($labels['title']) .'</h1>';
    echo '<form method="POST">';
    echo '<table class="form-table">';
    echo '<tbody>';

    //--
    //-- INTRO
    //--
    echo '<tr>';
    echo '<th scope="row" colspan="2">';
    echo '<p>'. esc_html($labels['help_access_intro']) .'</p>';
    echo '<ul style="padding:revert;list-style:disc;font-size: small;">' ;
    foreach($labels['help_access_el'] as $id => $el) {
        echo '<li>'. esc_html($el) .'</li>';
    }
    echo '</ul>' ;
    echo '<p>'. esc_html($labels['help_access_last']) .' : <a href="'. $labels['help_link'] .'" target="Securating">'. $labels['help_link'] .'</a></p>';
    echo '</th>';
    echo '<td style="text-align: center;">';
    echo '<a href="https://securating.com" target="_Blanc">';
    echo '<img src="https://securating.com/docs/img/securating-400.png" style="width:300px">';
    echo '</a>';
    echo '</td>';
    echo '</tr>';


    //-- CHOOSE TO CREATE A FREE ACCOUNT
    $token_ok = (isset($_POST['securating_create_exists']))||(!empty($data['securating_company']))&&($data['securating_company']>0);
    if($token_ok) {

        //-- ACCOUNT DETAILS
        echo '<tr>';
        echo '<th colspan=2 scope="row">';
        echo '<p style="font-size: larger;">'.esc_html($labels['label_params_created']).'</p>';
        echo '</th>';
        echo '<td></td>';
        echo '</tr>';


        $html_token_check = '';
        $html_website_check = '';

        if(!securating_check_token_verification_file($data['securating_token'])) {
            $html_token_check .= '<p style="color:red;">'. esc_attr($labels['label_warning_file_missing']) .'</p>';
        } else {
            if(!securating_admin_verification(['securating_website' => $data['securating_website'],
                                               'securating_token' => $data['securating_token']], false)) {
                $html_website_check .= '<p style="color:red;">'. esc_attr($labels['label_warning_key_not_verified']) .'</p>';
            } else {
                $html_website_check .= '<p style="color:green;">'. esc_attr($labels['label_warning_key_verified']) .'</p>';
            }
        }

        //-- ACCOUNT DETAILS : WEBSITE
        echo '<tr>';
        echo '<th scope="row">';
        echo '<label for="securating_website" >'.esc_html($labels['securating_website']).
                '<span class="dashicons-before dashicons-editor-help" title="' . esc_html($labels['help_securating_website']) . '" ></span>'.
             '</label>';
        echo '</th>';
        echo '<td>';
        echo '<input name="securating_website" type="text" id="securating_website" value="' . esc_attr($data['securating_website']) . '" class="regular-text">';
        echo '<br>';
        echo $html_website_check;
        echo '</td>';
        echo '</tr>';

        //-- ACCOUNT DETAILS : TOKEN
        echo '<tr>';
        echo '<th scope="row">';
        echo '<label for="securating_token" title="'.esc_html($labels['help_token']).'" >' .
             '<span class="dashicons-before dashicons-editor-help"></span>' .
             esc_html($labels['label_token']) .
             '</label>';
        echo '</th>';
        echo '<td>';
        echo '<input name="securating_token" type="text" id="securating_token" value="'. esc_attr($data['securating_token']) .'" class="regular-text">';
        echo '<br>';
        echo $html_token_check;
        echo '</td>';
        echo '</tr>';


        //-- ACCOUNT DETAILS : COMPANY ID
        echo '<tr>';
        echo '<th scope="row">';
        echo '<label for="securating_company" title="'.esc_html($labels['help_company']).'" >' .
             '<span class="dashicons-before dashicons-editor-help"></span>'.esc_html($labels['label_company']) .
             '</label>';
        echo '</th>';
        echo '<td>';
        echo '<input readonly  name="securating_company" type="text" id="securating_company" value="'. esc_attr($data['securating_company']) .'" class="regular-text">';
        echo '<br>';
        echo '</td>';
        echo '</tr>';


        //-- ACCOUNT DETAILS : WIDGET VERSION
        echo '<tr>';
        echo '<th scope="row">';
        echo '<label for="securating_widget_version" title="'.esc_html($labels['help_widget_version']).'" >' .
            '<span class="dashicons-before dashicons-editor-help"></span>' .
            esc_html($labels['label_widget_version']) .
            '</label>';
        echo '</th>';
        echo '<td>';
        echo '<input name="securating_widget_version" type="text" id="securating_widget_version" value="'. esc_attr($data['securating_widget_version']) .'" class="regular-text">';
        echo '<br>';
        echo '</td>';
        echo '</tr>';


    } else {

        if(empty($data['securating_create_email'])) {
            $data['securating_create_email'] = get_option( 'admin_email' );
        }
        if(empty($data['securating_create_website'])) {
            $data['securating_create_website'] = str_replace(['https://','http://'],'',get_option( 'siteurl' ));
        }

        //-- ACCOUNT TO CREATE
        echo '<tr>';
        echo '<th colspan=2 scope="row">';
        echo '<p style="font-size: larger;">' . esc_html($labels['label_params_not_created']) . '</p>';
        echo '</th>';
        echo '<td></td>';
        echo '</tr>';

        //-- ACCOUNT TO CREATE : EMAIL
        echo '<tr>';
        echo '<th scope="row">';
        echo '<label for="securating_create_email" title="' . esc_html($labels['help_securating_create_email']) . '" >' .
            '<span class="dashicons-before dashicons-editor-help"></span>' . esc_html($labels['securating_create_email']) .
            '</label>';
        echo '</th>';
        echo '<td>';
        echo '<input name="securating_create_email" type="text" id="securating_create_email" value="' . esc_attr($data['securating_create_email']) . '" class="regular-text">';
        echo '<br>';
        echo '</td>';
        echo '</tr>';

        //-- ACCOUNT TO CREATE : WEBSITE
        echo '<tr>';
        echo '<th scope="row">';
        echo '<label for="securating_create_website" title="' . esc_html($labels['help_securating_create_website']) . '" >' .
            '<span class="dashicons-before dashicons-editor-help"></span>' . esc_html($labels['securating_create_website']) .
            '</label>';
        echo '</th>';
        echo '<td>';
        echo '<input name="securating_create_website" type="text" id="securating_create_website" value="' . esc_attr($data['securating_create_website']) . '" class="regular-text">';
        echo '<br>';
        echo '</td>';
        echo '</tr>';

        //-- SUBMIT
        echo '<tr>';
        echo '<th colspan=2 scope="row">';
        echo '<p class="submit">';
        echo '<input type="submit" name="securating_create_now" value="' . esc_attr($labels['label_create_my_account']) . '" class="button button-primary"/>&nbsp;';
        echo '<input type="submit" name="securating_create_exists" value="' . esc_attr($labels['label_create_my_exists']) . '" class="button button-secondary"/>';
        echo '</p>';
        echo '</th>';
        echo '<td></td>';
        echo '</tr>';

    }

    //--
    //-- MENU SOCIAL
    //--
    echo '<tr>';
    echo '<th colspan=2 scope="row">';
    echo '<p style="font-size: larger;">'. esc_html($labels['label_params_menu_social']) .'</p>';
    echo '</th>';
    echo '<td rowspan="6" style="text-align: center;">';
    echo '<img src="https://securating.com/docs/img/menu-400.png" style="width:400px">';
    echo '</td>';
    echo '</tr>';

    //-- MENU SOCIAL / ACTIVE
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_active" title="'.esc_html($labels['help_menu_active']).'" >' .
         '<span class="dashicons-before dashicons-editor-help"></span>'.esc_html($labels['label_menu_active']).
         '</label>';
    echo '</th>';
    echo '<td>';
    echo '<select name="securating_active" type="text" id="securating_active">';
    $ouinon = [
        'oui' => $labels['label_oui'],
        'non' => $labels['label_non'],
    ];
    foreach( $ouinon as $k => $v) {
        $selected = '' ; if($data['securating_active']==$k) $selected = 'SELECTED' ;
        echo '<option '. $selected .' value="'. $k .'">'. $v .'</option>';
    }
    echo '</select>';
    echo '<br>';
    echo '</td>';
    echo '</tr>';

    //-- MENU SOCIAL / THEME
    echo '<tr>';
    echo '<th scope="row" >';
    echo '<label for="securating_theme" title="'.esc_html($labels['help_menu_theme']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_menu_theme']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<select name="securating_theme" type="text" id="securating_theme">';
    $themes = [
        'base' => "Base",
        'light' => 'Light',
        'vicking' => 'Vicking',
    ];
    foreach( $themes as $k => $v) {
        $selected = '' ; if($data['securating_theme']==$k) $selected = 'SELECTED' ;
        echo '<option '. $selected .' value="'. $k .'">'. $v .'</option>';    
    }
    echo '</select>';
    echo '<br>';
    echo '</td>';
    echo '</tr>';

    //-- MENU SOCIAL / ACCENT
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_accent" title="'.esc_html($labels['help_menu_accent']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_menu_accent']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<select name="securating_accent" type="text" id="securating_accent">';
    $accents = [
        'white' => "Blanc",
        'pastel' => 'Pastel',
        'whale' => 'Baleine',
        'dark' => 'Sombre',
    ];
    foreach( $accents as $k => $v ) {
        $selected = '' ; if($data['securating_accent']==$k) $selected = 'SELECTED' ;
        echo '<option '. $selected .' value="'. $k .'">'. $v .'</option>';    
    }
    echo '</select>';
    echo '<br>';
    echo '</td>';
    echo '</tr>';

    //-- MENU SOCIAL / LOCALE
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_locale" title="'.esc_html($labels['help_menu_locale']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_menu_locale']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<select name="securating_locale" type="text" id="securating_locale">';
    $locales = [
        'fr' => "Français",
        'en' => 'Anglais',
    ];
    foreach( $locales as $k => $v) {
        $selected = '' ; if($data['securating_locale']==$k) $selected = 'SELECTED' ;
        echo '<option '. $selected .' value="'. $k .'">'. $v .'</option>';    
    }
    echo '</select>';
    echo '<br>';
    echo '</td>';
    echo '</tr>';

    //-- MENU SOCIAL / MENU XY
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_menux" title="'.esc_html($labels['help_menu_menuxy']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_menu_menuxy']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo 'X: <input name="securating_menux" type="text" id="securating_menux" value="'. esc_attr($data['securating_menux']) .'" class="regular-text" style="width:50px;"> % , ';
    echo 'Y: <input name="securating_menuy" type="text" id="securating_menuy" value="'. esc_attr($data['securating_menuy']) .'" class="regular-text" style="width:50px;"> % ';
    echo '<br>';
    echo '</td>';
    echo '</tr>';


    //--
    //-- STICKER
    //--
    echo '<tr>';
    echo '<th colspan=2 scope="row">';
    echo '<p style="font-size: larger;">'. esc_html($labels['label_params_sticker']) .'</p>';
    echo '</th>';
    echo '<td rowspan="4" style="text-align: center;">';
    $stickerFilename = 'attestation-r2.1.png' ;
    if($data['securating_sticker_modele']=='r2') $stickerFilename = 'attestation-r2.png' ;
    if($data['securating_sticker_modele']=='r1') $stickerFilename = 'attestation-r1.png' ;

    echo '<img src="https://securating.com/docs/img/'.$stickerFilename.'" style="width:200px">';
    echo '</td>';
    echo '</tr>';

    //-- STICKER / SHOW
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_show_sticker" title="'.esc_html($labels['help_show_sticker']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_show_sticker']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<select name="securating_show_sticker" type="text" id="securating_show_sticker">';
    $ouinon = [
        'oui' => esc_html($labels['label_oui']),
        'non' => esc_html($labels['label_non']),
    ];
    foreach( $ouinon as $k => $v) {
        $selected = '' ; if($data['securating_show_sticker']==$k) $selected = 'SELECTED' ;
        echo '<option '. $selected .' value="'. $k .'">'. $v .'</option>';
    }
    echo '</select>';
    echo '<br>';
    echo '</td>';
    echo '</tr>';

    //-- STICKER / MODELE
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_sticker_modele" title="'.esc_html($labels['help_sticker_modele']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_sticker_modele']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<input name="securating_sticker_modele" type="text" id="securating_sticker_modele" value="'. esc_attr($data['securating_sticker_modele']) .'" class="regular-text" style="width:100px;">';
    echo '<br>';
    echo '</td>';
    echo '</tr>';

    //-- STICKER / CLASS
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_sticker_class" title="'.esc_html($labels['help_sticker_class']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_sticker_class']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<select name="securating_sticker_class" type="text" id="securating_sticker_class">';
    $positions = [
        'top_right' => esc_html($labels['top_right']),
        'top_left' => esc_html($labels['top_left']),
        'bottom_left' => esc_html($labels['bottom_left']),
        'bottom_right' => esc_html($labels['bottom_right']),
    ];
    foreach( $positions as $k => $v) {
        $selected = '' ; if($data['securating_sticker_class']==$k) $selected = 'SELECTED' ;
        echo '<option '. $selected .' value="'. $k .'">'. $v .'</option>';
    }
    echo '</select>';
    echo '<br>';
    echo '</td>';
    echo '</tr>';

    //--
    //-- OPTIMIZATION
    //--
    echo '<tr>';
    echo '<th colspan=2 scope="row">';
    echo '<p style="font-size: larger;">'. esc_html($labels['label_params_optimization']) .'</p>';
    echo '</th>';
    echo '<td rowspan="2" style="text-align: center;">';
    echo '</td>';
    echo '</tr>';

    //-- OPTIMIZATION / CACHE
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_use_cache" title="'.esc_html($labels['help_use_cache']).'" >' .
         '<span class="dashicons-before dashicons-editor-help"></span>' .
         esc_html($labels['label_use_cache']) .
         '</label>';
    echo '</th>';
    echo '<td>';
    echo '<select name="securating_use_cache" type="text" id="securating_use_cache">';
    $ouinon = [
        'oui' => $labels['label_oui'],
        'non' => $labels['label_non'],
    ];
    foreach( $ouinon as $k => $v) {
        $selected = '' ; if($data['securating_use_cache']==$k) $selected = 'SELECTED' ;
        echo '<option '. $selected .' value="'. $k .'">'. $v .'</option>';
    }
    echo '</select>';
    echo '<br>';
    echo '</td>';
    echo '</tr>';


    //--
    //-- WOOCOMMERCE
    //--
    echo '<tr>';
    echo '<th colspan=2 scope="row">';
    echo '<p style="font-size: larger;">'. esc_html($labels['label_params_product']) .'</p>';
    echo '</th>';
    echo '<td rowspan="4" style="text-align: center;">';
    echo '<img src="https://securating.com/docs/img/woocommerce-logo.png" style="width:400px">';
    echo '</td>';
    echo '</tr>';

    //-- WOOCOMMERCE / PRODUCT TOP
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_review_in_product_top" title="'.esc_html($labels['help_show_review_in_product_top']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_show_review_in_product_top']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<select name="securating_review_in_product_top" type="text" id="securating_review_in_product_top">';
    $ouinon = [
        'oui' => esc_html($labels['label_oui']),
        'non' => esc_html($labels['label_non']),
    ];
    foreach( $ouinon as $k => $v) {
        $selected = '' ; if($data['securating_review_in_product_top']==$k) $selected = 'SELECTED' ;
        echo '<option '. $selected .' value="'. $k .'">'. $v .'</option>';
    }
    echo '</select>';
    echo '<br><br>';
    echo '<i>'.esc_attr($labels['help_widget_details']) .'</i><br>';
    echo '<input '.
             ' id="securating_review_in_product_top_params"'.
             ' name="securating_review_in_product_top_params"'.
             ' type="text"'.
             ' placeholder="'.esc_attr($labels['label_widget_details']) .'"'.
             ' value="'.esc_attr($data['securating_review_in_product_top_params']).'"'.
             ' class="regular-text"'.
             ' style="width:400px;"'.
         '>';
    echo '<br><br>';
    echo '<i>'.esc_attr($labels['help_widget_css']) .'</i><br>';
    echo '<textarea '.
        ' id="securating_review_in_product_top_css"'.
        ' name="securating_review_in_product_top_css"'.
        ' rows="3"'.
        ' placeholder="'.esc_attr($labels['label_widget_css']) .'"'.
        ' class="regular-text"'.
        ' style="width:400px;"'.
        '>';
    echo $data['securating_review_in_product_top_css'];
    echo '</textarea>';
    echo '</td>';
    echo '</tr>';

    //-- WOOCOMMERCE / PRODUCT BOTTOM
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_review_in_product_bottom" title="'.esc_html($labels['help_show_review_in_product_bottom']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_show_review_in_product_bottom']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<select name="securating_review_in_product_bottom" type="text" id="securating_review_in_product_bottom">';
    $ouinon = [
        'oui' => esc_html($labels['label_oui']),
        'non' => esc_html($labels['label_non']),
    ];
    foreach( $ouinon as $k => $v) {
        $selected = '' ; if($data['securating_review_in_product_bottom']==$k) $selected = 'SELECTED' ;
        echo '<option '. $selected .' value="'. $k .'">'. $v .'</option>';
    }
    echo '</select>';
    echo '<br><br>';
    echo '<i>'.esc_attr($labels['help_widget_details']) .'</i><br>';
    echo '<input '.
        ' id="securating_review_in_product_bottom_params"'.
        ' name="securating_review_in_product_bottom_params"'.
        ' type="text"'.
        ' placeholder="'.esc_attr($labels['label_widget_details']) .'"'.
        ' value="'.esc_attr($data['securating_review_in_product_bottom_params']).'"'.
        ' class="regular-text"'.
        ' style="width:400px;"'.
        '>';
    echo '<br><br>';
    echo '<i>'.esc_attr($labels['help_widget_css']) .'</i><br>';
    echo '<textarea '.
        ' id="securating_review_in_product_bottom_css"'.
        ' name="securating_review_in_product_bottom_css"'.
        ' rows="3"'.
        ' placeholder="'.esc_attr($labels['label_widget_css']) .'"'.
        ' class="regular-text"'.
        ' style="width:400px;"'.
        '>';
    echo $data['securating_review_in_product_bottom_css'];
    echo '</textarea>';
    echo '</td>';
    echo '</tr>';


    //-- WOOCOMMERCE / PRODUCT LIST
    echo '<tr>';
    echo '<th colspan=2 scope="row">';
    echo '<p style="font-size: larger;">'. esc_html($labels['label_params_product_list']) .'</p>';
    echo '</th>';
    echo '<td rowspan="4" style="text-align: center;">';
    echo '</td>';
    echo '</tr>';

    //-- WOOCOMMERCE / PRODUCT LIST
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_review_in_product_list" title="'.esc_html($labels['help_show_review_in_product_list']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_show_review_in_product_list']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<select name="securating_review_in_product_list" type="text" id="securating_review_in_product_list">';
    $ouinon = [
        'oui' => esc_html($labels['label_oui']),
        'non' => esc_html($labels['label_non']),
    ];
    foreach( $ouinon as $k => $v) {
        $selected = '' ; if($data['securating_review_in_product_list']==$k) $selected = 'SELECTED' ;
        echo '<option '. $selected .' value="'. $k .'">'. $v .'</option>';
    }
    echo '</select>';
    echo '<br><br>';
    echo '<i>'.esc_attr($labels['help_widget_details']) .'</i><br>';
    echo '<input '.
        ' id="securating_review_in_product_list_params"'.
        ' name="securating_review_in_product_list_params"'.
        ' type="text"'.
        ' placeholder="'.esc_attr($labels['label_widget_details']) .'"'.
        ' value="'.esc_attr($data['securating_review_in_product_list_params']).'"'.
        ' class="regular-text"'.
        ' style="width:400px;"'.
        '>';
    echo '<br><br>';
    echo '<i>'.esc_attr($labels['help_widget_css']) .'</i><br>';
    echo '<textarea '.
        ' id="securating_review_in_product_list_css"'.
        ' name="securating_review_in_product_list_css"'.
        ' rows="3"'.
        ' placeholder="'.esc_attr($labels['label_widget_css']) .'"'.
        ' value="'.esc_attr($data['']).'"'.
        ' class="regular-text"'.
        ' style="width:400px;"'.
        '>';
    echo $data['securating_review_in_product_list_css'];
    echo '</textarea>';
    echo '</td>';
    echo '</tr>';

    //--
    //-- INVITATION AFTER ORDER
    //--
    echo '<tr>';
    echo '<th colspan=2 scope="row">';
    echo '<p style="font-size: larger;">'. esc_html($labels['label_params_order']) .'</p>';
    echo '</th>';
    echo '<td rowspan="5" style="text-align: center;">';
    echo '<img src="https://securating.com/docs/img/woocommerce-logo.png" style="width:400px">';
    echo '</td>';
    echo '</tr>';

    //-- COLLECT / ACTIVE
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_collect" title="'.esc_html($labels['help_securating_collect']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>'.esc_html($labels['label_securating_collect']).
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<select name="securating_collect" type="text" id="securating_collect">';
    $ouinon = [
        'oui' => $labels['label_oui'],
        'non' => $labels['label_non'],
    ];
    foreach( $ouinon as $k => $v) {
        $selected = '' ; if($data['securating_collect']==$k) $selected = 'SELECTED' ;
        echo '<option '. $selected .' value="'. $k .'">'. $v .'</option>';
    }
    echo '</select>';
    echo '<br>';
    echo '</td>';
    echo '</tr>';

    //-- INVITATION / COMPANY
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_company_name" title="'.esc_html($labels['help_invitation_companyname']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_invitation_companyname']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<input name="securating_company_name" type="text" id="securating_company_name" value="'. esc_attr($data['securating_company_name']) .'" class="regular-text" style="width:300px;">';
    echo '<br>';
    echo '</td>';
    echo '</tr>';

    //-- INVITATION / URL
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_url" title="'.esc_html($labels['help_invitation_url']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_invitation_url']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<input name="securating_url" type="text" id="securating_url" value="'. esc_attr($data['securating_url']) .'" class="regular-text" style="width:300px;">';
    echo '<br>';
    echo '</td>';
    echo '</tr>';

    //-- INVITATION / DAYS
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_days" title="'.esc_html($labels['help_invitation_days']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_invitation_days']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<input name="securating_days" type="text" id="securating_days" value="'. esc_attr($data['securating_days']) .'" class="regular-text" style="width:300px;">';
    echo '<br>';
    echo '</td>';
    echo '</tr>';

    //-- INVITATION / WEBHOOK
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="securating_webhook" title="'.esc_html($labels['help_invitation_webhook']).'" >' .
        '<span class="dashicons-before dashicons-editor-help"></span>' .
        esc_html($labels['label_invitation_webhook']) .
        '</label>';
    echo '</th>';
    echo '<td>';
    echo '<input name="securating_webhook" type="text" id="securating_webhook" value="'. esc_attr($data['securating_webhook']) .'" class="regular-text" style="width:300px;">';
    echo '<br>';
    echo '</td>';
    echo '</tr>';

    //--
    //-- FORM-END / SUMBIT
    //--
    echo '</tbody>';
    echo '</table>';
    echo '<p class="submit">';
    echo '<input type="submit" name="securating_admin_submit" value="'. esc_attr($labels['label_send']) .'" class="button button-primary"/>';
    echo '</p>';
    echo '</form>';

}

/**
 * securating_admin_verification()
 * send a verification request to api.securating.io
 */
function securating_admin_verification($data = null , $withDelay =true )
{

    $lg = 'fr';
    $labels = securating_getLabels($lg);

    $verificationDone = false;

    $securatingApiUrl = 'https://api.securating.io/modules/live-verification';
    $securatingApiUrl .= '?securating_website=' . $data['securating_website'];
    $securatingApiUrl .= '&securating_token=' . $data['securating_token'];

    //-- Wait first 2 seconds, because on some server created file are not immediately accessible via http
    if($withDelay) sleep(2);

    //-- Max 3 retry with 2 seconds sleep (if not verified)
    $max_loop = 3;
    while ($max_loop > 0) {
        $max_loop--;
        $result = file_get_contents($securatingApiUrl);

        $resultArr = json_decode($result, true);
        
        if((is_array($resultArr))&&(!empty($resultArr['data']))){
            if (!empty($resultArr['data']['website_is_verified'])) {
                $verificationDone = true;
                break;
            } else {
                echo '<p style="color:red;">'. esc_attr($labels['label_warning']) .' : [no-verified].</p>';
                echo '<pre style="display:none">traces => '.nl2br(print_r($resultArr,true)).'</pre>';
                echo '<pre style="display:none">traces => '.nl2br(print_r($securatingApiUrl,true)).'</pre>';
            }
        } else {
            echo '<p style="color:red;">'. esc_attr($labels['label_warning']) .' : [no-data].</p>';
            echo '<pre style="display:none">traces => '.nl2br(print_r($result,true)).'</pre>';
            echo '<pre style="display:none">traces => '.nl2br(print_r($securatingApiUrl,true)).'</pre>';
        }

        if($withDelay) {
            sleep(2);
        } else {
            break;
        }
    }

    return $verificationDone;
}
/**
 * securating_admin_create()
 * send a create request to api.securating.io
 */

function securating_admin_create(&$data = null)
{

    $lg = 'fr';
    $labels = securating_getLabels($lg);

    $createDone = false;

    $securatingApiUrl = 'https://api.securating.io/modules/live-create';

    $postdata = http_build_query([
                    'securating_email'   => $data['securating_create_email'],
                    'securating_website' => $data['securating_create_website'],
                    ]);

    $opts = ['http' => [
                         'method'  => 'POST',
                         'header'  => 'Content-Type: application/x-www-form-urlencoded',
                         'content' => $postdata
                       ]];

    $context = stream_context_create($opts);
    $result = file_get_contents($securatingApiUrl, false, $context);

    $resultArr = json_decode($result,true) ;
    if((is_array($resultArr))&&(isset($resultArr['data']))) {
        $dataResultArr = $resultArr['data'] ;
        if((!empty($dataResultArr['token']))&&(!empty($dataResultArr['company_id']))&&($dataResultArr['company_id']>0)) {
            //-- Update saved options
            //-- Upodate securating_website with return cleaned value
            $data['securating_website'] = sanitize_text_field($data['securating_create_website']);
            $data['securating_token'] = sanitize_text_field($dataResultArr['token']);
            $data['securating_company'] = sanitize_text_field($dataResultArr['company_id']);

            update_option('securating_website' , $data['securating_website']);
            update_option('securating_token' , $data['securating_token']);
            update_option('securating_company' , $data['securating_company']);

            $createDone = true;
        } else {
            echo '<p style="color:red;">'. esc_attr($labels['label_warning']) .' : [cre-bad-data-token/id].</p>';
            echo '<pre style="display:none">traces => '.nl2br(print_r($resultArr,true)).'</pre>';
        }
    } else {
        echo '<p style="color:red;">'. esc_attr($labels['label_warning']) .' : [cre-not-arr].</p>';
        echo '<pre style="display:none">traces = '.$result.'</pre>';
    }
    return $createDone;
}

/**
 * securating_admin_save()
 * save the token to a local file
 */
function securating_admin_save(&$data = null){
    $saveDone = false ;

    //-- If a token is given, we try to get the company_id
    if(!empty($data['securating_token'])) {
        //-- get the securating_company from securating api
        $url = 'https://api.securating.io/widgets/company/' .$data['securating_token']. '/id';
        $data['securating_company'] = @file_get_contents($url);
        if($data['securating_company']===false) {
            $data['securating_company'] = '...';
            $data['securating_token'] = '';
        }
    } else {
        $data['securating_company'] = '';
    }

    //-- We save all key values
    foreach ($data as $k => $v) {
        if (!add_option($k, $v)) {
            update_option($k, $v);
        }
    }

    //-- create the wanted securating token file
    if(securating_save_token_verification_file($data['securating_token'])) {
        $saveDone = true;
    }

    return($saveDone);
}

/**
 * securating_save_token_verification_file()
 * erase all existing token file and save the token if any to a local file
 */
function securating_save_token_verification_file($token){
    $saveDone = true;
    //-- remove all existing securating token files
    @array_map('unlink', glob(securating_wp_config_path() . '/securating_*.txt'));

    //-- User do really want to set a new token ?
    if(!empty($token)) {
        $tokenFilename = securating_wp_config_path() . '/'.sanitize_file_name('securating_'.substr($token,0,6).'.txt');

        //-- create the wanted securating token file
        if(file_put_contents($tokenFilename, $token)===false) {
            $saveDone=false;
        } else {
            $saveDone=true;
        }
    }
    return $saveDone;
}

/**
 * securating_save_token_verification_file()
 * erase all existing token file and save the token if any to a local file
 */
function securating_check_token_verification_file($token){
    $checkOk = false;
    //-- User do really want to set a new token ?
    if(!empty($token)) {
        $tokenFilename = securating_wp_config_path() . '/'.sanitize_file_name('securating_'.substr($token,0,6).'.txt');
        //-- create the wanted securating token file
        if(file_get_contents($tokenFilename)===$token) {
            $checkOk=true;
        } else {
        }
    }
    return $checkOk;
}

/**
 * --- Wordpress Hooks Footer ---
 */
function add_securating_footer_content() {

    $content = '';
    $needSecuratingScript = false ;

    //-- Any securating token, that will need the script ?
    if(!empty($_GET['securating_token'])) {
        $needSecuratingScript = true ;
    }

    //-- Include the Securating Menu ?
    $securating_active = get_option( 'securating_active' , null );
    if($securating_active != 'non') {
        $needSecuratingScript = true ;
        $securating_theme = get_option('securating_theme', null);
        if ($securating_theme) {
            $content .= '<meta property="securating:theme" content="' . $securating_theme . '">';
        }

        $securating_accent = get_option('securating_accent', null);
        if ($securating_accent) {
            $content .= '<meta property="securating:accent" content="' . $securating_accent . '">';
        }

        $securating_locale = get_option('securating_locale', null);
        if ($securating_locale) {
            $content .= '<meta property="securating:locale" content="' . $securating_locale . '">';
        }

        $securating_menux = get_option('securating_menux', null);
        if ($securating_menux) {
            $content .= '<meta property="securating:menu-x" content="' . $securating_menux . '">';
        }

        $securating_menuy = get_option('securating_menuy', null);
        if ($securating_menuy) {
            $content .= '<meta property="securating:menu-y" content="' . $securating_menuy . '">';
        }
    }

    //-- Include the Securating Sticker ?
    $securating_show_sticker = get_option( 'securating_show_sticker' , null );
    if($securating_show_sticker!="non") {
        $widget_att = [
                'hide_schema' => 1,
                'hide_reviews' => 1,
                'hide_overview' => 1,
                'show_sticker' => 1,
                ];

        $sticker_modele = get_option( 'securating_sticker_modele' , null );
        if($sticker_modele) $widget_att['sticker_modele'] = $sticker_modele;

        $sticker_class = get_option( 'securating_sticker_class' , null );
        if($sticker_class) $widget_att['sticker_class'] = $sticker_class;

        $content .= shortcode_securating_widget($widget_att) ;
    }

    //-- Add the Securating script ?
    if($needSecuratingScript) {
        $content .= '<div id="securating"></div>';
        $content .= '<iframe id="sr_iframe_localstorage" src="https://api.securating.io" style="display:none;"></iframe>';

        wp_enqueue_script( 'Securating-build-js', 'https://api.securating.io/resource/build.js', array(), '1.0', true ) ;
    }
    echo $content;
}
add_action( 'wp_footer', 'add_securating_footer_content' );

/**
 * shortcode_securating_widget()
 * This function includes the Securatng Widget Rating
 */
function shortcode_securating_widget($atts = [], $content = null, $tag = '' ){
    $securating_token = get_securating_token();
    if(empty($securating_token)) return '';

    $securating_widget_version = get_option( 'securating_widget_version' , '' );
    if(empty($securating_widget_version)) {
        $widgetUrl = 'https://api.securating.io/widgets';
    } else {
        $widgetUrl = 'https://api.securating.io/widgets/'.$securating_widget_version;
    }

    $widgetUrl .= '?token='.$securating_token;

    foreach($atts as $attributeName => $attributeValue) {
        $widgetUrl .= '&'.$attributeName.'='.$attributeValue;
    }

    return file_get_contents( $widgetUrl );
}
add_shortcode('securating_widget', 'shortcode_securating_widget');

/**
 * securating_setup_menu()
 * add the Securating Administration menu
 */
function securating_setup_menu(){
    add_menu_page( 'Securating Plugin Page', 'Securating', 'manage_options', 'test-plugin', 'securating_admin_main' );
}
add_action('admin_menu', 'securating_setup_menu');

/**
 * --- WooCommerce Hooks ---
 */

/**
 * action_securating_action_woocommerce_single_product_summary()
 * add securating product overview widget on product page
 */
function securating_action_woocommerce_single_product_summary( ) {
    global $product;
    static $style_inserted = false;

    $widget = '';

    $data = [
        'securating_token' => get_securating_token(),
        'securating_company' => get_option( 'securating_company' , '' ),
        'securating_review_in_product_top' => get_option( 'securating_review_in_product_top' , '' ),
        'securating_review_in_product_top_params' => get_option( 'securating_review_in_product_top_params' , '' ),
        'securating_review_in_product_top_css' => get_option( 'securating_review_in_product_top_css' , '' ),
    ];

    if(!empty($data['securating_token'])&&$data['securating_review_in_product_top']!=='non') {
        $securatingProduct = $data['securating_company'] . ':' . $product->sku;
        $securatingProductDescription = $product->short_description;
        if (empty($securatingProductDescription)) {
            $securatingProductDescription = $product->description;
        }

        $securating_widget_version = get_option( 'securating_widget_version' , '' );
        if(empty($securating_widget_version)) {
            $widgetUrl = 'https://api.securating.io/widgets';
        } else {
            $widgetUrl = 'https://api.securating.io/widgets/'.$securating_widget_version;
        }

        $url  = $widgetUrl.'?v='.$securating_widget_version;
        $url .= '&token=' . $data['securating_token'];
        $url .= '&type=product';
        $url .= '&internal_ref=' . $securatingProduct;
        $url .= '&product_desc=' . urlencode($securatingProductDescription);

        $defaultParams = DEFAULT_WIDGET_PARAMS_TOP.','.$data['securating_review_in_product_top_params'];
        foreach (explode(',',$defaultParams) as $param) {
            $url .= '&'.$param;
        }

        try {
            $widget = securating_file_get_from_cache($url, $data);
            $widget = securating_remove_style($widget);
        } catch (Exception $e) {
            $widget = '';
        }
    }
    if((!$style_inserted)&&(!empty($data['securating_review_in_product_top_css']))) {
        $widget .= '<style>'.$data['securating_review_in_product_top_css'].'</style>';
        $style_inserted = true;
    }
    //-- Add META data for product selection
    $meta = '<meta property="securating:product" content="' . $securatingProduct . '">';
    echo $widget.$meta;
}
add_action( 'woocommerce_single_product_summary', 'securating_action_woocommerce_single_product_summary');

/**
 * securating_action_woocommerce_after_single_product_summary()
 * add securating product reviews widget on product page
 */
function securating_action_woocommerce_after_single_product_summary( ) {
    global $product;
    static $style_inserted = false;

    $data = [
        'securating_token' => get_securating_token(),
        'securating_company' => get_option( 'securating_company' , '' ),
        'securating_review_in_product_bottom' => get_option( 'securating_review_in_product_bottom' , '' ),
        'securating_review_in_product_bottom_params' => get_option( 'securating_review_in_product_bottom_params' , '' ),
        'securating_review_in_product_bottom_css' => get_option( 'securating_review_in_product_bottom_css' , '' ),
    ];


    if(!empty($data['securating_token'])&&$data['securating_review_in_product_bottom']!=='non') {
        $securatingProduct = $data['securating_company'] . ':' . $product->sku;
        $securatingProductDescription = $product->short_description;
        if (empty($securatingProductDescription)) {
            $securatingProductDescription = $product->description;
        }

        $securating_widget_version = get_option( 'securating_widget_version' , '' );
        if(empty($securating_widget_version)) {
            $widgetUrl = 'https://api.securating.io/widgets';
        } else {
            $widgetUrl = 'https://api.securating.io/widgets/'.$securating_widget_version;
        }

        $url  = $widgetUrl.'?v='.$securating_widget_version;
        $url .= '&token=' . $data['securating_token'];
        $url .= '&type=product';
        $url .= '&internal_ref=' . $securatingProduct;
        $url .= '&product_desc=' . urlencode($securatingProductDescription);


        $defaultParams = DEFAULT_WIDGET_PARAMS_BOTTOM.','.$data['securating_review_in_product_bottom_params'];
        foreach (explode(',',$defaultParams) as $param) {
            $url .= '&'.$param;
        }

        try {
            $widget = securating_file_get_from_cache($url, $data);
            $widget = securating_remove_style($widget);

        } catch (Exception $e) {
            $widget = '';
        }
        if((!$style_inserted)&&(!empty($data['securating_review_in_product_bottom_css']))) {
            $widget .= '<style>'.$data['securating_review_in_product_bottom_css'].'</style>';
            $style_inserted = true;
        }
        echo $widget;
    }
}
add_action( 'woocommerce_after_single_product_summary', 'securating_action_woocommerce_after_single_product_summary');

/**
 * securating_action_woocommerce_after_shop_loop_item()
 * add securating product reviews widget on shop loop item page
 */
function securating_action_woocommerce_after_shop_loop_item( ) {
    global $product;
    static $style_inserted = false;

    $data = [
        'securating_token' => get_securating_token(),
        'securating_company' => get_option( 'securating_company' , '' ),
        'securating_review_in_product_list' => get_option( 'securating_review_in_product_list' , '' ),
        'securating_review_in_product_list_params' => get_option( 'securating_review_in_product_list_params' , '' ),
        'securating_review_in_product_list_css' => get_option( 'securating_review_in_product_list_css' , '' ),
    ];

    if(!empty($data['securating_token'])&&$data['securating_review_in_product_list']!=='non') {
        $securatingProduct = $data['securating_company'] . ':' . $product->sku;
        $securatingProductDescription = $product->short_description;
        if (empty($securatingProductDescription)) {
            $securatingProductDescription = $product->description;
        }

        $securating_widget_version = get_option( 'securating_widget_version' , '' );
        if(empty($securating_widget_version)) {
            $widgetUrl = 'https://api.securating.io/widgets';
        } else {
            $widgetUrl = 'https://api.securating.io/widgets/'.$securating_widget_version;
        }

        $url  = $widgetUrl.'?v='.$securating_widget_version;
        $url .= '&token=' . $data['securating_token'];
        $url .= '&type=product';
        $url .= '&internal_ref=' . $securatingProduct;
        $url .= '&product_desc=' . urlencode($securatingProductDescription);

        $defaultParams = DEFAULT_WIDGET_PARAMS_LIST.','.$data['securating_review_in_product_list_params'];
        foreach (explode(',',$defaultParams) as $param) {
            $url .= '&'.$param;
        }
        try {
            $widget = securating_file_get_from_cache($url, $data);
            $widget = securating_remove_style($widget);
        } catch (Exception $e) {
            $widget = '';
        }
        if((!$style_inserted)&&(!empty($data['securating_review_in_product_list_css']))) {
            $widget .= '<style>'.$data['securating_review_in_product_list_css'].'</style>';
            $style_inserted = true;
        }
        echo $widget;
    }
}
add_action( 'woocommerce_after_shop_loop_item', 'securating_action_woocommerce_after_shop_loop_item');

/**
 * securating_action_create_invitation()
 * add securating product reviews widget on shop loop item page
 */
function securating_action_create_invitation($orderId) {

        $data = [
            'securating_collect' => get_option( 'securating_collect' , '' ),
            'securating_token' => get_securating_token(),
            'securating_url' => get_option( 'securating_url' , '' ),
            'securating_company_name' => get_option( 'securating_company_name' , '' ),
            'securating_days' => get_option( 'securating_days' , '' ),
            'securating_webhook' => get_option( 'securating_webhook' , '' ),
        ];

        if(($data['securating_collect']!=='non')&&(!empty($data['securating_token']))){

            $days = $data['securating_days'];
            $api = 'https://api.securating.io/invitation/create';

            $order = new WC_Order( $orderId );
            foreach( $order->get_items() as $item_id => $item ) {

                $product = $item->get_product();
                $product_name = $product->get_name();
                $product_sku = $product->get_sku();

                $void = securating_httpPost(
                    $api,
                    [
                        'keywebsite'   => $data['securating_token'],
                        'email'        => $order->get_billing_email(),
                        'first_name'   => $order->get_billing_first_name(),
                        'last_name'    => $order->get_billing_last_name(),
                        'company_name' => $data['securating_company_name'],
                        'url'          => $data['securating_url'],
                        'days'         => $days,
                        'order'        => $orderId,
                        'product'      => $product_sku,
                        'product_desc' => $product_name,
                        'webhook'      => $data['securating_webhook'],
                        'from_order'    => 1,
                        'with_gift'     => 0,
                        'order_date'    => date('Y-m-d'),
                        'order_number'  => $orderId,
                        'order_item_type' => 'product',
                        'order_item_code' => $product_sku,
                        'order_item_desc' => $product_name,
                    ]
                );
                //-- Only on Invitation per order
                break ;
            }
        }
}
add_action('woocommerce_thankyou', 'securating_action_create_invitation');
add_action('woocommerce_order_status_changed', 'securating_action_create_invitation');
add_action('woocommerce_new_order', 'securating_action_create_invitation');

/**
 * securating_action_cancel_invitation()
 * cancel a Securating invitation
 */
function securating_action_cancel_invitation( $orderId ){
    
    $data = [
            'securating_token' => get_securating_token(),
    ];

    if(!empty($data['securating_token'])){
        $api = 'https://api.securating.io/invitation/cancel';

        securating_httpPost(
            $api,
            [
                'keywebsite' => $data['securating_token'],
                'order'      => $orderId,
            ]
        );
    }
}
add_action('woocommerce_order_status_cancelled','securating_action_cancel_invitation');


/**
 * securating_remove_style()
 * keep from Securating widget only first style bloc
 */
function securating_remove_style($html) {
    static $stylesIds = [] ;

    //-- Split in <style.* lines
    $htmlArray = explode('<style', str_replace("\n", '#-#-CR-#-#', $html)) ;
    foreach ($htmlArray as &$line) {
        $line = trim($line);
        //-- In case the style has an Id
        if(substr($line,0,4)==='id="') {

            $styleId = substr($line,4,strpos( $line,'"' ,5)-4) ;
            $line .= '<!-- strpos ('.strpos($line,'"' , 5).') -->';
            $line .= '<!-- first 50 ('.substr( $line,0,50).') -->';
            $line .= '<!-- styleId ('.$styleId.') -->';


            //-- Keep it only the first time during the page build
            if(isset($stylesIds[$styleId])) {
                $line = preg_replace('/.*<\/style>/', '' , $line);
            } else {
                $line = '<style '.$line;
                $stylesIds[$styleId] = 1;
            }
        } else {
            if(strpos($line,'</style')) {
                $line = '<style '.$line;
            }
        }
    }
    return str_replace( '#-#-CR-#-#',"\n", implode(' ',$htmlArray));
}
