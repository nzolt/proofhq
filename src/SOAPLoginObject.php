<?php

namespace Boskee\ProofHQ;

class SOAPLoginObject
{

    /**
     * @var string $session
     */
    protected $session = null;

    /**
     * @var int $user_id
     */
    protected $user_id = null;

    /**
     * @var string $user_name
     */
    protected $user_name = null;

    /**
     * @var string $user_email
     */
    protected $user_email = null;

    /**
     * @var int $organisation_id
     */
    protected $organisation_id = null;

    /**
     * @var string $organisation_name
     */
    protected $organisation_name = null;

    /**
     * @var int $limit_storage
     */
    protected $limit_storage = null;

    /**
     * @var int $limit_proofs
     */
    protected $limit_proofs = null;

    /**
     * @var int $max_file_size
     */
    protected $max_file_size = null;

    /**
     * @var string $default_subject
     */
    protected $default_subject = null;

    /**
     * @var string $default_message
     */
    protected $default_message = null;

    /**
     * @var string $default_upload_host
     */
    protected $default_upload_host = null;

    /**
     * @var string $default_email_notifications
     */
    protected $default_email_notifications = null;

    /**
     * @var boolean $default_authorized_only
     */
    protected $default_authorized_only = null;

    /**
     * @var boolean $default_enable_subscriptions
     */
    protected $default_enable_subscriptions = null;

    /**
     * @var boolean $default_validate_subscriptions
     */
    protected $default_validate_subscriptions = null;

    /**
     * @var boolean $default_auto_lock
     */
    protected $default_auto_lock = null;

    /**
     * @var boolean $default_lock_after_first_decision
     */
    protected $default_lock_after_first_decision = null;

    /**
     * @var boolean $default_enable_download
     */
    protected $default_enable_download = null;

    /**
     * @var boolean $default_enable_team_url
     */
    protected $default_enable_team_url = null;

    /**
     * @var boolean $default_enable_embed_player
     */
    protected $default_enable_embed_player = null;

    /**
     * @var boolean $default_show_dashboard_link
     */
    protected $default_show_dashboard_link = null;

    /**
     * @var boolean $default_show_workspace_link
     */
    protected $default_show_workspace_link = null;

    /**
     * @var boolean $default_show_details_page_link
     */
    protected $default_show_details_page_link = null;

    /**
     * @var boolean $default_show_versions_link
     */
    protected $default_show_versions_link = null;

    /**
     * @var boolean $default_show_help_link
     */
    protected $default_show_help_link = null;

    /**
     * @var boolean $default_show_help_quick_start_link
     */
    protected $default_show_help_quick_start_link = null;

    /**
     * @var boolean $default_show_help_user_guide_link
     */
    protected $default_show_help_user_guide_link = null;

    /**
     * @var boolean $default_show_help_welcome_screen_link
     */
    protected $default_show_help_welcome_screen_link = null;

    /**
     * @var boolean $default_show_help_forum_link
     */
    protected $default_show_help_forum_link = null;

    /**
     * @var boolean $default_show_help_blog_link
     */
    protected $default_show_help_blog_link = null;

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var boolean $can_create_folder
     */
    protected $can_create_folder = null;

    /**
     * @var boolean $can_create_private_folder
     */
    protected $can_create_private_folder = null;

    /**
     * @param string $session
     * @param int $user_id
     * @param string $user_name
     * @param string $user_email
     * @param int $organisation_id
     * @param string $organisation_name
     * @param int $limit_storage
     * @param int $limit_proofs
     * @param int $max_file_size
     * @param string $default_subject
     * @param string $default_message
     * @param string $default_upload_host
     * @param string $default_email_notifications
     * @param boolean $default_authorized_only
     * @param boolean $default_enable_subscriptions
     * @param boolean $default_validate_subscriptions
     * @param boolean $default_auto_lock
     * @param boolean $default_lock_after_first_decision
     * @param boolean $default_enable_download
     * @param boolean $default_enable_team_url
     * @param boolean $default_enable_embed_player
     * @param boolean $default_show_dashboard_link
     * @param boolean $default_show_workspace_link
     * @param boolean $default_show_details_page_link
     * @param boolean $default_show_versions_link
     * @param boolean $default_show_help_link
     * @param boolean $default_show_help_quick_start_link
     * @param boolean $default_show_help_user_guide_link
     * @param boolean $default_show_help_welcome_screen_link
     * @param boolean $default_show_help_forum_link
     * @param boolean $default_show_help_blog_link
     * @param string $domain
     * @param boolean $can_create_folder
     * @param boolean $can_create_private_folder
     */
    public function __construct($session, $user_id, $user_name, $user_email, $organisation_id, $organisation_name, $limit_storage, $limit_proofs, $max_file_size, $default_subject, $default_message, $default_upload_host, $default_email_notifications, $default_authorized_only, $default_enable_subscriptions, $default_validate_subscriptions, $default_auto_lock, $default_lock_after_first_decision, $default_enable_download, $default_enable_team_url, $default_enable_embed_player, $default_show_dashboard_link, $default_show_workspace_link, $default_show_details_page_link, $default_show_versions_link, $default_show_help_link, $default_show_help_quick_start_link, $default_show_help_user_guide_link, $default_show_help_welcome_screen_link, $default_show_help_forum_link, $default_show_help_blog_link, $domain, $can_create_folder, $can_create_private_folder)
    {
      $this->session = $session;
      $this->user_id = $user_id;
      $this->user_name = $user_name;
      $this->user_email = $user_email;
      $this->organisation_id = $organisation_id;
      $this->organisation_name = $organisation_name;
      $this->limit_storage = $limit_storage;
      $this->limit_proofs = $limit_proofs;
      $this->max_file_size = $max_file_size;
      $this->default_subject = $default_subject;
      $this->default_message = $default_message;
      $this->default_upload_host = $default_upload_host;
      $this->default_email_notifications = $default_email_notifications;
      $this->default_authorized_only = $default_authorized_only;
      $this->default_enable_subscriptions = $default_enable_subscriptions;
      $this->default_validate_subscriptions = $default_validate_subscriptions;
      $this->default_auto_lock = $default_auto_lock;
      $this->default_lock_after_first_decision = $default_lock_after_first_decision;
      $this->default_enable_download = $default_enable_download;
      $this->default_enable_team_url = $default_enable_team_url;
      $this->default_enable_embed_player = $default_enable_embed_player;
      $this->default_show_dashboard_link = $default_show_dashboard_link;
      $this->default_show_workspace_link = $default_show_workspace_link;
      $this->default_show_details_page_link = $default_show_details_page_link;
      $this->default_show_versions_link = $default_show_versions_link;
      $this->default_show_help_link = $default_show_help_link;
      $this->default_show_help_quick_start_link = $default_show_help_quick_start_link;
      $this->default_show_help_user_guide_link = $default_show_help_user_guide_link;
      $this->default_show_help_welcome_screen_link = $default_show_help_welcome_screen_link;
      $this->default_show_help_forum_link = $default_show_help_forum_link;
      $this->default_show_help_blog_link = $default_show_help_blog_link;
      $this->domain = $domain;
      $this->can_create_folder = $can_create_folder;
      $this->can_create_private_folder = $can_create_private_folder;
    }

    /**
     * @return string
     */
    public function getSession()
    {
      return $this->session;
    }

    /**
     * @param string $session
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setSession($session)
    {
      $this->session = $session;
      return $this;
    }

    /**
     * @return int
     */
    public function getUser_id()
    {
      return $this->user_id;
    }

    /**
     * @param int $user_id
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setUser_id($user_id)
    {
      $this->user_id = $user_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getUser_name()
    {
      return $this->user_name;
    }

    /**
     * @param string $user_name
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setUser_name($user_name)
    {
      $this->user_name = $user_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getUser_email()
    {
      return $this->user_email;
    }

    /**
     * @param string $user_email
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setUser_email($user_email)
    {
      $this->user_email = $user_email;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrganisation_id()
    {
      return $this->organisation_id;
    }

    /**
     * @param int $organisation_id
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setOrganisation_id($organisation_id)
    {
      $this->organisation_id = $organisation_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrganisation_name()
    {
      return $this->organisation_name;
    }

    /**
     * @param string $organisation_name
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setOrganisation_name($organisation_name)
    {
      $this->organisation_name = $organisation_name;
      return $this;
    }

    /**
     * @return int
     */
    public function getLimit_storage()
    {
      return $this->limit_storage;
    }

    /**
     * @param int $limit_storage
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setLimit_storage($limit_storage)
    {
      $this->limit_storage = $limit_storage;
      return $this;
    }

    /**
     * @return int
     */
    public function getLimit_proofs()
    {
      return $this->limit_proofs;
    }

    /**
     * @param int $limit_proofs
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setLimit_proofs($limit_proofs)
    {
      $this->limit_proofs = $limit_proofs;
      return $this;
    }

    /**
     * @return int
     */
    public function getMax_file_size()
    {
      return $this->max_file_size;
    }

    /**
     * @param int $max_file_size
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setMax_file_size($max_file_size)
    {
      $this->max_file_size = $max_file_size;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefault_subject()
    {
      return $this->default_subject;
    }

    /**
     * @param string $default_subject
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_subject($default_subject)
    {
      $this->default_subject = $default_subject;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefault_message()
    {
      return $this->default_message;
    }

    /**
     * @param string $default_message
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_message($default_message)
    {
      $this->default_message = $default_message;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefault_upload_host()
    {
      return $this->default_upload_host;
    }

    /**
     * @param string $default_upload_host
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_upload_host($default_upload_host)
    {
      $this->default_upload_host = $default_upload_host;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefault_email_notifications()
    {
      return $this->default_email_notifications;
    }

    /**
     * @param string $default_email_notifications
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_email_notifications($default_email_notifications)
    {
      $this->default_email_notifications = $default_email_notifications;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_authorized_only()
    {
      return $this->default_authorized_only;
    }

    /**
     * @param boolean $default_authorized_only
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_authorized_only($default_authorized_only)
    {
      $this->default_authorized_only = $default_authorized_only;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_enable_subscriptions()
    {
      return $this->default_enable_subscriptions;
    }

    /**
     * @param boolean $default_enable_subscriptions
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_enable_subscriptions($default_enable_subscriptions)
    {
      $this->default_enable_subscriptions = $default_enable_subscriptions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_validate_subscriptions()
    {
      return $this->default_validate_subscriptions;
    }

    /**
     * @param boolean $default_validate_subscriptions
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_validate_subscriptions($default_validate_subscriptions)
    {
      $this->default_validate_subscriptions = $default_validate_subscriptions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_auto_lock()
    {
      return $this->default_auto_lock;
    }

    /**
     * @param boolean $default_auto_lock
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_auto_lock($default_auto_lock)
    {
      $this->default_auto_lock = $default_auto_lock;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_lock_after_first_decision()
    {
      return $this->default_lock_after_first_decision;
    }

    /**
     * @param boolean $default_lock_after_first_decision
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_lock_after_first_decision($default_lock_after_first_decision)
    {
      $this->default_lock_after_first_decision = $default_lock_after_first_decision;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_enable_download()
    {
      return $this->default_enable_download;
    }

    /**
     * @param boolean $default_enable_download
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_enable_download($default_enable_download)
    {
      $this->default_enable_download = $default_enable_download;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_enable_team_url()
    {
      return $this->default_enable_team_url;
    }

    /**
     * @param boolean $default_enable_team_url
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_enable_team_url($default_enable_team_url)
    {
      $this->default_enable_team_url = $default_enable_team_url;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_enable_embed_player()
    {
      return $this->default_enable_embed_player;
    }

    /**
     * @param boolean $default_enable_embed_player
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_enable_embed_player($default_enable_embed_player)
    {
      $this->default_enable_embed_player = $default_enable_embed_player;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_show_dashboard_link()
    {
      return $this->default_show_dashboard_link;
    }

    /**
     * @param boolean $default_show_dashboard_link
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_show_dashboard_link($default_show_dashboard_link)
    {
      $this->default_show_dashboard_link = $default_show_dashboard_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_show_workspace_link()
    {
      return $this->default_show_workspace_link;
    }

    /**
     * @param boolean $default_show_workspace_link
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_show_workspace_link($default_show_workspace_link)
    {
      $this->default_show_workspace_link = $default_show_workspace_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_show_details_page_link()
    {
      return $this->default_show_details_page_link;
    }

    /**
     * @param boolean $default_show_details_page_link
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_show_details_page_link($default_show_details_page_link)
    {
      $this->default_show_details_page_link = $default_show_details_page_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_show_versions_link()
    {
      return $this->default_show_versions_link;
    }

    /**
     * @param boolean $default_show_versions_link
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_show_versions_link($default_show_versions_link)
    {
      $this->default_show_versions_link = $default_show_versions_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_show_help_link()
    {
      return $this->default_show_help_link;
    }

    /**
     * @param boolean $default_show_help_link
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_show_help_link($default_show_help_link)
    {
      $this->default_show_help_link = $default_show_help_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_show_help_quick_start_link()
    {
      return $this->default_show_help_quick_start_link;
    }

    /**
     * @param boolean $default_show_help_quick_start_link
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_show_help_quick_start_link($default_show_help_quick_start_link)
    {
      $this->default_show_help_quick_start_link = $default_show_help_quick_start_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_show_help_user_guide_link()
    {
      return $this->default_show_help_user_guide_link;
    }

    /**
     * @param boolean $default_show_help_user_guide_link
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_show_help_user_guide_link($default_show_help_user_guide_link)
    {
      $this->default_show_help_user_guide_link = $default_show_help_user_guide_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_show_help_welcome_screen_link()
    {
      return $this->default_show_help_welcome_screen_link;
    }

    /**
     * @param boolean $default_show_help_welcome_screen_link
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_show_help_welcome_screen_link($default_show_help_welcome_screen_link)
    {
      $this->default_show_help_welcome_screen_link = $default_show_help_welcome_screen_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_show_help_forum_link()
    {
      return $this->default_show_help_forum_link;
    }

    /**
     * @param boolean $default_show_help_forum_link
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_show_help_forum_link($default_show_help_forum_link)
    {
      $this->default_show_help_forum_link = $default_show_help_forum_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault_show_help_blog_link()
    {
      return $this->default_show_help_blog_link;
    }

    /**
     * @param boolean $default_show_help_blog_link
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDefault_show_help_blog_link($default_show_help_blog_link)
    {
      $this->default_show_help_blog_link = $default_show_help_blog_link;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
      return $this->domain;
    }

    /**
     * @param string $domain
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setDomain($domain)
    {
      $this->domain = $domain;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCan_create_folder()
    {
      return $this->can_create_folder;
    }

    /**
     * @param boolean $can_create_folder
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setCan_create_folder($can_create_folder)
    {
      $this->can_create_folder = $can_create_folder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCan_create_private_folder()
    {
      return $this->can_create_private_folder;
    }

    /**
     * @param boolean $can_create_private_folder
     * @return \Boskee\ProofHQ\SOAPLoginObject
     */
    public function setCan_create_private_folder($can_create_private_folder)
    {
      $this->can_create_private_folder = $can_create_private_folder;
      return $this;
    }

}
