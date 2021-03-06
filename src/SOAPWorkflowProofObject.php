<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowProofObject
{

    /**
     * @var int $proof_id
     */
    protected $proof_id = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $filename
     */
    protected $filename = null;

    /**
     * @var string $filesize
     */
    protected $filesize = null;

    /**
     * @var int $version
     */
    protected $version = null;

    /**
     * @var int $versions
     */
    protected $versions = null;

    /**
     * @var string $upload_time
     */
    protected $upload_time = null;

    /**
     * @var int $uploader_id
     */
    protected $uploader_id = null;

    /**
     * @var string $uploader
     */
    protected $uploader = null;

    /**
     * @var int $owner_id
     */
    protected $owner_id = null;

    /**
     * @var string $owner
     */
    protected $owner = null;

    /**
     * @var SOAPWorkflowProofStageObjectArray $stages
     */
    protected $stages = null;

    /**
     * @var int $workspace_id
     */
    protected $workspace_id = null;

    /**
     * @var string $workspace_name
     */
    protected $workspace_name = null;

    /**
     * @var int $workflow_template_id
     */
    protected $workflow_template_id = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $decision
     */
    protected $decision = null;

    /**
     * @var string $team_url
     */
    protected $team_url = null;

    /**
     * @var SOAPFileSettingsObject $settings
     */
    protected $settings = null;

    /**
     * @var string $custom_link_url
     */
    protected $custom_link_url = null;

    /**
     * @var string $custom_link_label
     */
    protected $custom_link_label = null;

    /**
     * @var SOAPFileLinkObjectArray $menus_links
     */
    protected $menus_links = null;

    /**
     * @var string $swf
     */
    protected $swf = null;

    /**
     * @var SOAPRecipientDecisionReasonObjectArray $decision_reasons
     */
    protected $decision_reasons = null;

    /**
     * @var boolean $combined_proof
     */
    protected $combined_proof = null;

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @var int $pages
     */
    protected $pages = null;

    /**
     * @var string $reference_id
     */
    protected $reference_id = null;

    /**
     * @param int $proof_id
     * @param string $type
     * @param string $filename
     * @param string $filesize
     * @param int $version
     * @param int $versions
     * @param string $upload_time
     * @param int $uploader_id
     * @param string $uploader
     * @param int $owner_id
     * @param string $owner
     * @param SOAPWorkflowProofStageObjectArray $stages
     * @param int $workspace_id
     * @param string $workspace_name
     * @param string $status
     * @param string $decision
     * @param string $team_url
     * @param SOAPFileSettingsObject $settings
     * @param string $custom_link_url
     * @param string $custom_link_label
     * @param SOAPFileLinkObjectArray $menus_links
     * @param string $swf
     * @param SOAPRecipientDecisionReasonObjectArray $decision_reasons
     * @param boolean $combined_proof
     * @param string $token
     * @param int $pages
     */
    public function __construct($proof_id, $type, $filename, $filesize, $version, $versions, $upload_time, $uploader_id, $uploader, $owner_id, $owner, $stages, $workspace_id, $workspace_name, $status, $decision, $team_url, $settings, $custom_link_url, $custom_link_label, $menus_links, $swf, $decision_reasons, $combined_proof, $token, $pages)
    {
      $this->proof_id = $proof_id;
      $this->type = $type;
      $this->filename = $filename;
      $this->filesize = $filesize;
      $this->version = $version;
      $this->versions = $versions;
      $this->upload_time = $upload_time;
      $this->uploader_id = $uploader_id;
      $this->uploader = $uploader;
      $this->owner_id = $owner_id;
      $this->owner = $owner;
      $this->stages = $stages;
      $this->workspace_id = $workspace_id;
      $this->workspace_name = $workspace_name;
      $this->status = $status;
      $this->decision = $decision;
      $this->team_url = $team_url;
      $this->settings = $settings;
      $this->custom_link_url = $custom_link_url;
      $this->custom_link_label = $custom_link_label;
      $this->menus_links = $menus_links;
      $this->swf = $swf;
      $this->decision_reasons = $decision_reasons;
      $this->combined_proof = $combined_proof;
      $this->token = $token;
      $this->pages = $pages;
    }

    /**
     * @return int
     */
    public function getProof_id()
    {
      return $this->proof_id;
    }

    /**
     * @param int $proof_id
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setProof_id($proof_id)
    {
      $this->proof_id = $proof_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
      return $this->filename;
    }

    /**
     * @param string $filename
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setFilename($filename)
    {
      $this->filename = $filename;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilesize()
    {
      return $this->filesize;
    }

    /**
     * @param string $filesize
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setFilesize($filesize)
    {
      $this->filesize = $filesize;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param int $version
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersions()
    {
      return $this->versions;
    }

    /**
     * @param int $versions
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setVersions($versions)
    {
      $this->versions = $versions;
      return $this;
    }

    /**
     * @return string
     */
    public function getUpload_time()
    {
      return $this->upload_time;
    }

    /**
     * @param string $upload_time
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setUpload_time($upload_time)
    {
      $this->upload_time = $upload_time;
      return $this;
    }

    /**
     * @return int
     */
    public function getUploader_id()
    {
      return $this->uploader_id;
    }

    /**
     * @param int $uploader_id
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setUploader_id($uploader_id)
    {
      $this->uploader_id = $uploader_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getUploader()
    {
      return $this->uploader;
    }

    /**
     * @param string $uploader
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setUploader($uploader)
    {
      $this->uploader = $uploader;
      return $this;
    }

    /**
     * @return int
     */
    public function getOwner_id()
    {
      return $this->owner_id;
    }

    /**
     * @param int $owner_id
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setOwner_id($owner_id)
    {
      $this->owner_id = $owner_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param string $owner
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SOAPWorkflowProofStageObjectArray
     */
    public function getStages()
    {
      return $this->stages;
    }

    /**
     * @param SOAPWorkflowProofStageObjectArray $stages
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setStages($stages)
    {
      $this->stages = $stages;
      return $this;
    }

    /**
     * @return int
     */
    public function getWorkspace_id()
    {
      return $this->workspace_id;
    }

    /**
     * @param int $workspace_id
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setWorkspace_id($workspace_id)
    {
      $this->workspace_id = $workspace_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkspace_name()
    {
      return $this->workspace_name;
    }

    /**
     * @param string $workspace_name
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setWorkspace_name($workspace_name)
    {
      $this->workspace_name = $workspace_name;
      return $this;
    }

    /**
     * @return int
     */
    public function getWorkflow_template_id()
    {
      return $this->workflow_template_id;
    }

    /**
     * @param int $workflow_template_id
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setWorkflow_template_id($workflow_template_id)
    {
      $this->workflow_template_id = $workflow_template_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getDecision()
    {
      return $this->decision;
    }

    /**
     * @param string $decision
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setDecision($decision)
    {
      $this->decision = $decision;
      return $this;
    }

    /**
     * @return string
     */
    public function getTeam_url()
    {
      return $this->team_url;
    }

    /**
     * @param string $team_url
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setTeam_url($team_url)
    {
      $this->team_url = $team_url;
      return $this;
    }

    /**
     * @return SOAPFileSettingsObject
     */
    public function getSettings()
    {
      return $this->settings;
    }

    /**
     * @param SOAPFileSettingsObject $settings
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setSettings($settings)
    {
      $this->settings = $settings;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom_link_url()
    {
      return $this->custom_link_url;
    }

    /**
     * @param string $custom_link_url
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setCustom_link_url($custom_link_url)
    {
      $this->custom_link_url = $custom_link_url;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom_link_label()
    {
      return $this->custom_link_label;
    }

    /**
     * @param string $custom_link_label
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setCustom_link_label($custom_link_label)
    {
      $this->custom_link_label = $custom_link_label;
      return $this;
    }

    /**
     * @return SOAPFileLinkObjectArray
     */
    public function getMenus_links()
    {
      return $this->menus_links;
    }

    /**
     * @param SOAPFileLinkObjectArray $menus_links
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setMenus_links($menus_links)
    {
      $this->menus_links = $menus_links;
      return $this;
    }

    /**
     * @return string
     */
    public function getSwf()
    {
      return $this->swf;
    }

    /**
     * @param string $swf
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setSwf($swf)
    {
      $this->swf = $swf;
      return $this;
    }

    /**
     * @return SOAPRecipientDecisionReasonObjectArray
     */
    public function getDecision_reasons()
    {
      return $this->decision_reasons;
    }

    /**
     * @param SOAPRecipientDecisionReasonObjectArray $decision_reasons
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setDecision_reasons($decision_reasons)
    {
      $this->decision_reasons = $decision_reasons;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCombined_proof()
    {
      return $this->combined_proof;
    }

    /**
     * @param boolean $combined_proof
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setCombined_proof($combined_proof)
    {
      $this->combined_proof = $combined_proof;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

    /**
     * @return int
     */
    public function getPages()
    {
      return $this->pages;
    }

    /**
     * @param int $pages
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setPages($pages)
    {
      $this->pages = $pages;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference_id()
    {
      return $this->reference_id;
    }

    /**
     * @param string $reference_id
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObject
     */
    public function setReference_id($reference_id)
    {
      $this->reference_id = $reference_id;
      return $this;
    }

}
