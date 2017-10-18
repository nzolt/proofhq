<?php

namespace Boskee\ProofHQ;

class SOAPFileSettingsObject
{

    /**
     * @var string $default_email_notifications
     */
    protected $default_email_notifications = null;

    /**
     * @var string $default_role
     */
    protected $default_role = null;

    /**
     * @var boolean $authorized_only
     */
    protected $authorized_only = null;

    /**
     * @var boolean $enable_subscriptions
     */
    protected $enable_subscriptions = null;

    /**
     * @var boolean $validate_subscriptions
     */
    protected $validate_subscriptions = null;

    /**
     * @var boolean $auto_lock
     */
    protected $auto_lock = null;

    /**
     * @var boolean $lock_after_first_decision
     */
    protected $lock_after_first_decision = null;

    /**
     * @var boolean $enable_download
     */
    protected $enable_download = null;

    /**
     * @var boolean $enable_team_url
     */
    protected $enable_team_url = null;

    /**
     * @var boolean $enable_embed_player
     */
    protected $enable_embed_player = null;

    /**
     * @var boolean $show_dashboard_link
     */
    protected $show_dashboard_link = null;

    /**
     * @var boolean $show_workspace_link
     */
    protected $show_workspace_link = null;

    /**
     * @var boolean $show_details_page_link
     */
    protected $show_details_page_link = null;

    /**
     * @var boolean $show_versions_link
     */
    protected $show_versions_link = null;

    /**
     * @var boolean $show_help_link
     */
    protected $show_help_link = null;

    /**
     * @var boolean $show_help_quick_start_link
     */
    protected $show_help_quick_start_link = null;

    /**
     * @var boolean $show_help_user_guide_link
     */
    protected $show_help_user_guide_link = null;

    /**
     * @var boolean $show_help_welcome_screen_link
     */
    protected $show_help_welcome_screen_link = null;

    /**
     * @var boolean $show_help_forum_link
     */
    protected $show_help_forum_link = null;

    /**
     * @var boolean $show_help_blog_link
     */
    protected $show_help_blog_link = null;

    /**
     * @var boolean $show_dashboard_functions
     */
    protected $show_dashboard_functions = null;

    /**
     * @var string $primary_decision_maker
     */
    protected $primary_decision_maker = null;

    /**
     * @var boolean $show_close_icon
     */
    protected $show_close_icon = null;

    /**
     * @var boolean $show_publish_to_the_web
     */
    protected $show_publish_to_the_web = null;

    /**
     * @var boolean $show_print_comments
     */
    protected $show_print_comments = null;

    /**
     * @var boolean $show_email_alert_settings
     */
    protected $show_email_alert_settings = null;

    /**
     * @var boolean $electronic_signatures
     */
    protected $electronic_signatures = null;

    /**
     * @var boolean $show_send_decision_confirmation_checkbox
     */
    protected $show_send_decision_confirmation_checkbox = null;

    /**
     * @var boolean $show_proof_details
     */
    protected $show_proof_details = null;

    /**
     * @var boolean $show_proof_workflow
     */
    protected $show_proof_workflow = null;

    /**
     * @param string $default_email_notifications
     * @param string $default_role
     * @param boolean $authorized_only
     * @param boolean $enable_subscriptions
     * @param boolean $validate_subscriptions
     * @param boolean $auto_lock
     * @param boolean $lock_after_first_decision
     * @param boolean $enable_download
     * @param boolean $enable_team_url
     * @param boolean $enable_embed_player
     * @param boolean $show_dashboard_link
     * @param boolean $show_workspace_link
     * @param boolean $show_details_page_link
     * @param boolean $show_versions_link
     * @param boolean $show_help_link
     * @param boolean $show_help_quick_start_link
     * @param boolean $show_help_user_guide_link
     * @param boolean $show_help_welcome_screen_link
     * @param boolean $show_help_forum_link
     * @param boolean $show_help_blog_link
     * @param boolean $show_dashboard_functions
     * @param string $primary_decision_maker
     * @param boolean $show_close_icon
     * @param boolean $show_publish_to_the_web
     * @param boolean $show_print_comments
     * @param boolean $show_email_alert_settings
     * @param boolean $electronic_signatures
     * @param boolean $show_send_decision_confirmation_checkbox
     * @param boolean $show_proof_details
     * @param boolean $show_proof_workflow
     */
    public function __construct($default_email_notifications, $default_role, $authorized_only, $enable_subscriptions, $validate_subscriptions, $auto_lock, $lock_after_first_decision, $enable_download, $enable_team_url, $enable_embed_player, $show_dashboard_link, $show_workspace_link, $show_details_page_link, $show_versions_link, $show_help_link, $show_help_quick_start_link, $show_help_user_guide_link, $show_help_welcome_screen_link, $show_help_forum_link, $show_help_blog_link, $show_dashboard_functions, $primary_decision_maker, $show_close_icon, $show_publish_to_the_web, $show_print_comments, $show_email_alert_settings, $electronic_signatures, $show_send_decision_confirmation_checkbox, $show_proof_details, $show_proof_workflow)
    {
      $this->default_email_notifications = $default_email_notifications;
      $this->default_role = $default_role;
      $this->authorized_only = $authorized_only;
      $this->enable_subscriptions = $enable_subscriptions;
      $this->validate_subscriptions = $validate_subscriptions;
      $this->auto_lock = $auto_lock;
      $this->lock_after_first_decision = $lock_after_first_decision;
      $this->enable_download = $enable_download;
      $this->enable_team_url = $enable_team_url;
      $this->enable_embed_player = $enable_embed_player;
      $this->show_dashboard_link = $show_dashboard_link;
      $this->show_workspace_link = $show_workspace_link;
      $this->show_details_page_link = $show_details_page_link;
      $this->show_versions_link = $show_versions_link;
      $this->show_help_link = $show_help_link;
      $this->show_help_quick_start_link = $show_help_quick_start_link;
      $this->show_help_user_guide_link = $show_help_user_guide_link;
      $this->show_help_welcome_screen_link = $show_help_welcome_screen_link;
      $this->show_help_forum_link = $show_help_forum_link;
      $this->show_help_blog_link = $show_help_blog_link;
      $this->show_dashboard_functions = $show_dashboard_functions;
      $this->primary_decision_maker = $primary_decision_maker;
      $this->show_close_icon = $show_close_icon;
      $this->show_publish_to_the_web = $show_publish_to_the_web;
      $this->show_print_comments = $show_print_comments;
      $this->show_email_alert_settings = $show_email_alert_settings;
      $this->electronic_signatures = $electronic_signatures;
      $this->show_send_decision_confirmation_checkbox = $show_send_decision_confirmation_checkbox;
      $this->show_proof_details = $show_proof_details;
      $this->show_proof_workflow = $show_proof_workflow;
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
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setDefault_email_notifications($default_email_notifications)
    {
      $this->default_email_notifications = $default_email_notifications;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefault_role()
    {
      return $this->default_role;
    }

    /**
     * @param string $default_role
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setDefault_role($default_role)
    {
      $this->default_role = $default_role;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAuthorized_only()
    {
      return $this->authorized_only;
    }

    /**
     * @param boolean $authorized_only
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setAuthorized_only($authorized_only)
    {
      $this->authorized_only = $authorized_only;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnable_subscriptions()
    {
      return $this->enable_subscriptions;
    }

    /**
     * @param boolean $enable_subscriptions
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setEnable_subscriptions($enable_subscriptions)
    {
      $this->enable_subscriptions = $enable_subscriptions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValidate_subscriptions()
    {
      return $this->validate_subscriptions;
    }

    /**
     * @param boolean $validate_subscriptions
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setValidate_subscriptions($validate_subscriptions)
    {
      $this->validate_subscriptions = $validate_subscriptions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAuto_lock()
    {
      return $this->auto_lock;
    }

    /**
     * @param boolean $auto_lock
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setAuto_lock($auto_lock)
    {
      $this->auto_lock = $auto_lock;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLock_after_first_decision()
    {
      return $this->lock_after_first_decision;
    }

    /**
     * @param boolean $lock_after_first_decision
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setLock_after_first_decision($lock_after_first_decision)
    {
      $this->lock_after_first_decision = $lock_after_first_decision;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnable_download()
    {
      return $this->enable_download;
    }

    /**
     * @param boolean $enable_download
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setEnable_download($enable_download)
    {
      $this->enable_download = $enable_download;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnable_team_url()
    {
      return $this->enable_team_url;
    }

    /**
     * @param boolean $enable_team_url
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setEnable_team_url($enable_team_url)
    {
      $this->enable_team_url = $enable_team_url;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnable_embed_player()
    {
      return $this->enable_embed_player;
    }

    /**
     * @param boolean $enable_embed_player
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setEnable_embed_player($enable_embed_player)
    {
      $this->enable_embed_player = $enable_embed_player;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_dashboard_link()
    {
      return $this->show_dashboard_link;
    }

    /**
     * @param boolean $show_dashboard_link
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_dashboard_link($show_dashboard_link)
    {
      $this->show_dashboard_link = $show_dashboard_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_workspace_link()
    {
      return $this->show_workspace_link;
    }

    /**
     * @param boolean $show_workspace_link
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_workspace_link($show_workspace_link)
    {
      $this->show_workspace_link = $show_workspace_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_details_page_link()
    {
      return $this->show_details_page_link;
    }

    /**
     * @param boolean $show_details_page_link
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_details_page_link($show_details_page_link)
    {
      $this->show_details_page_link = $show_details_page_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_versions_link()
    {
      return $this->show_versions_link;
    }

    /**
     * @param boolean $show_versions_link
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_versions_link($show_versions_link)
    {
      $this->show_versions_link = $show_versions_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_help_link()
    {
      return $this->show_help_link;
    }

    /**
     * @param boolean $show_help_link
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_help_link($show_help_link)
    {
      $this->show_help_link = $show_help_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_help_quick_start_link()
    {
      return $this->show_help_quick_start_link;
    }

    /**
     * @param boolean $show_help_quick_start_link
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_help_quick_start_link($show_help_quick_start_link)
    {
      $this->show_help_quick_start_link = $show_help_quick_start_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_help_user_guide_link()
    {
      return $this->show_help_user_guide_link;
    }

    /**
     * @param boolean $show_help_user_guide_link
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_help_user_guide_link($show_help_user_guide_link)
    {
      $this->show_help_user_guide_link = $show_help_user_guide_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_help_welcome_screen_link()
    {
      return $this->show_help_welcome_screen_link;
    }

    /**
     * @param boolean $show_help_welcome_screen_link
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_help_welcome_screen_link($show_help_welcome_screen_link)
    {
      $this->show_help_welcome_screen_link = $show_help_welcome_screen_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_help_forum_link()
    {
      return $this->show_help_forum_link;
    }

    /**
     * @param boolean $show_help_forum_link
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_help_forum_link($show_help_forum_link)
    {
      $this->show_help_forum_link = $show_help_forum_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_help_blog_link()
    {
      return $this->show_help_blog_link;
    }

    /**
     * @param boolean $show_help_blog_link
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_help_blog_link($show_help_blog_link)
    {
      $this->show_help_blog_link = $show_help_blog_link;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_dashboard_functions()
    {
      return $this->show_dashboard_functions;
    }

    /**
     * @param boolean $show_dashboard_functions
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_dashboard_functions($show_dashboard_functions)
    {
      $this->show_dashboard_functions = $show_dashboard_functions;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrimary_decision_maker()
    {
      return $this->primary_decision_maker;
    }

    /**
     * @param string $primary_decision_maker
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setPrimary_decision_maker($primary_decision_maker)
    {
      $this->primary_decision_maker = $primary_decision_maker;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_close_icon()
    {
      return $this->show_close_icon;
    }

    /**
     * @param boolean $show_close_icon
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_close_icon($show_close_icon)
    {
      $this->show_close_icon = $show_close_icon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_publish_to_the_web()
    {
      return $this->show_publish_to_the_web;
    }

    /**
     * @param boolean $show_publish_to_the_web
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_publish_to_the_web($show_publish_to_the_web)
    {
      $this->show_publish_to_the_web = $show_publish_to_the_web;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_print_comments()
    {
      return $this->show_print_comments;
    }

    /**
     * @param boolean $show_print_comments
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_print_comments($show_print_comments)
    {
      $this->show_print_comments = $show_print_comments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_email_alert_settings()
    {
      return $this->show_email_alert_settings;
    }

    /**
     * @param boolean $show_email_alert_settings
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_email_alert_settings($show_email_alert_settings)
    {
      $this->show_email_alert_settings = $show_email_alert_settings;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getElectronic_signatures()
    {
      return $this->electronic_signatures;
    }

    /**
     * @param boolean $electronic_signatures
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setElectronic_signatures($electronic_signatures)
    {
      $this->electronic_signatures = $electronic_signatures;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_send_decision_confirmation_checkbox()
    {
      return $this->show_send_decision_confirmation_checkbox;
    }

    /**
     * @param boolean $show_send_decision_confirmation_checkbox
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_send_decision_confirmation_checkbox($show_send_decision_confirmation_checkbox)
    {
      $this->show_send_decision_confirmation_checkbox = $show_send_decision_confirmation_checkbox;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_proof_details()
    {
      return $this->show_proof_details;
    }

    /**
     * @param boolean $show_proof_details
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_proof_details($show_proof_details)
    {
      $this->show_proof_details = $show_proof_details;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShow_proof_workflow()
    {
      return $this->show_proof_workflow;
    }

    /**
     * @param boolean $show_proof_workflow
     * @return \Boskee\ProofHQ\SOAPFileSettingsObject
     */
    public function setShow_proof_workflow($show_proof_workflow)
    {
      $this->show_proof_workflow = $show_proof_workflow;
      return $this;
    }

}
