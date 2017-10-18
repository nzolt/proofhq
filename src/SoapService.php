<?php

namespace Boskee\ProofHQ;

class SoapService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SOAPLoginObject' => 'Boskee\\ProofHQ\\SOAPLoginObject',
      'SOAPFileUploadObject' => 'Boskee\\ProofHQ\\SOAPFileUploadObject',
      'SOAPFileUploadObjectArray' => 'Boskee\\ProofHQ\\SOAPFileUploadObjectArray',
      'SOAPFileSettingsObject' => 'Boskee\\ProofHQ\\SOAPFileSettingsObject',
      'StringArray' => 'Boskee\\ProofHQ\\StringArray',
      'SOAPFileLinkObject' => 'Boskee\\ProofHQ\\SOAPFileLinkObject',
      'SOAPFileLinkObjectArray' => 'Boskee\\ProofHQ\\SOAPFileLinkObjectArray',
      'SOAPRecipientDecisionReasonObject' => 'Boskee\\ProofHQ\\SOAPRecipientDecisionReasonObject',
      'SOAPRecipientDecisionReasonObjectArray' => 'Boskee\\ProofHQ\\SOAPRecipientDecisionReasonObjectArray',
      'SOAPProgressObject' => 'Boskee\\ProofHQ\\SOAPProgressObject',
      'SOAPProofStageObject' => 'Boskee\\ProofHQ\\SOAPProofStageObject',
      'SOAPProofStageObjectArray' => 'Boskee\\ProofHQ\\SOAPProofStageObjectArray',
      'SOAPFileObject' => 'Boskee\\ProofHQ\\SOAPFileObject',
      'SOAPRecipientObject' => 'Boskee\\ProofHQ\\SOAPRecipientObject',
      'SOAPWorkflowProofRecipientRequestUpdateObject' => 'Boskee\\ProofHQ\\SOAPWorkflowProofRecipientRequestUpdateObject',
      'SOAPWorkflowProofRecipientObject' => 'Boskee\\ProofHQ\\SOAPWorkflowProofRecipientObject',
      'SOAPFileActivityObject' => 'Boskee\\ProofHQ\\SOAPFileActivityObject',
      'SOAPFileActivityObjectArray' => 'Boskee\\ProofHQ\\SOAPFileActivityObjectArray',
      'SOAPProfileObject' => 'Boskee\\ProofHQ\\SOAPProfileObject',
      'SOAPProfileObjectArray' => 'Boskee\\ProofHQ\\SOAPProfileObjectArray',
      'SOAPContactProofingDefaultsObject' => 'Boskee\\ProofHQ\\SOAPContactProofingDefaultsObject',
      'SOAPContactObject' => 'Boskee\\ProofHQ\\SOAPContactObject',
      'SOAPContactObjectArray' => 'Boskee\\ProofHQ\\SOAPContactObjectArray',
      'SOAPContactGroupObject' => 'Boskee\\ProofHQ\\SOAPContactGroupObject',
      'SOAPContactGroupObjectArray' => 'Boskee\\ProofHQ\\SOAPContactGroupObjectArray',
      'SOAPContactAccountObject' => 'Boskee\\ProofHQ\\SOAPContactAccountObject',
      'SOAPContactAccountObjectArray' => 'Boskee\\ProofHQ\\SOAPContactAccountObjectArray',
      'SOAPWorkspaceObject' => 'Boskee\\ProofHQ\\SOAPWorkspaceObject',
      'SOAPWorkspaceObjectArray' => 'Boskee\\ProofHQ\\SOAPWorkspaceObjectArray',
      'SOAPFileObjectArray' => 'Boskee\\ProofHQ\\SOAPFileObjectArray',
      'AnyTypeArray' => 'Boskee\\ProofHQ\\AnyTypeArray',
      'SOAPFileListViewObject' => 'Boskee\\ProofHQ\\SOAPFileListViewObject',
      'SOAPFileListViewObjectArray' => 'Boskee\\ProofHQ\\SOAPFileListViewObjectArray',
      'SOAPFileListViewCollectionObject' => 'Boskee\\ProofHQ\\SOAPFileListViewCollectionObject',
      'SOAPRecipientObjectArray' => 'Boskee\\ProofHQ\\SOAPRecipientObjectArray',
      'SOAPCommentAttachmentObject' => 'Boskee\\ProofHQ\\SOAPCommentAttachmentObject',
      'SOAPCommentAttachmentObjectArray' => 'Boskee\\ProofHQ\\SOAPCommentAttachmentObjectArray',
      'SOAPCommentReplyObject' => 'Boskee\\ProofHQ\\SOAPCommentReplyObject',
      'SOAPCommentReplyObjectArray' => 'Boskee\\ProofHQ\\SOAPCommentReplyObjectArray',
      'SOAPCommentObject' => 'Boskee\\ProofHQ\\SOAPCommentObject',
      'SOAPCommentObjectArray' => 'Boskee\\ProofHQ\\SOAPCommentObjectArray',
      'SOAPFileEmbedCodeObject' => 'Boskee\\ProofHQ\\SOAPFileEmbedCodeObject',
      'SOAPFileEmbedCodeObjectArray' => 'Boskee\\ProofHQ\\SOAPFileEmbedCodeObjectArray',
      'SOAPImageObject' => 'Boskee\\ProofHQ\\SOAPImageObject',
      'SOAPPlanObject' => 'Boskee\\ProofHQ\\SOAPPlanObject',
      'SOAPMembershipObject' => 'Boskee\\ProofHQ\\SOAPMembershipObject',
      'SOAPPermissionsObject' => 'Boskee\\ProofHQ\\SOAPPermissionsObject',
      'SOAPUserProofingDefaultsObject' => 'Boskee\\ProofHQ\\SOAPUserProofingDefaultsObject',
      'SOAPUserEmailObject' => 'Boskee\\ProofHQ\\SOAPUserEmailObject',
      'SOAPUserEmailObjectArray' => 'Boskee\\ProofHQ\\SOAPUserEmailObjectArray',
      'SOAPUserObject' => 'Boskee\\ProofHQ\\SOAPUserObject',
      'SOAPUserObjectArray' => 'Boskee\\ProofHQ\\SOAPUserObjectArray',
      'SOAPAccountPasswordSettingsObject' => 'Boskee\\ProofHQ\\SOAPAccountPasswordSettingsObject',
      'SOAPAccountProofingDefaultsObject' => 'Boskee\\ProofHQ\\SOAPAccountProofingDefaultsObject',
      'SOAPAccountObject' => 'Boskee\\ProofHQ\\SOAPAccountObject',
      'SOAPSatelliteAccountObject' => 'Boskee\\ProofHQ\\SOAPSatelliteAccountObject',
      'SOAPCallbackObject' => 'Boskee\\ProofHQ\\SOAPCallbackObject',
      'SOAPCallbackObjectArray' => 'Boskee\\ProofHQ\\SOAPCallbackObjectArray',
      'SOAPSatelliteAccountObjectArray' => 'Boskee\\ProofHQ\\SOAPSatelliteAccountObjectArray',
      'SOAPFileRecipientObject' => 'Boskee\\ProofHQ\\SOAPFileRecipientObject',
      'SOAPFileRecipientObjectArray' => 'Boskee\\ProofHQ\\SOAPFileRecipientObjectArray',
      'SOAPWorkflowProofAddRecipientRequestObject' => 'Boskee\\ProofHQ\\SOAPWorkflowProofAddRecipientRequestObject',
      'SOAPWorkflowProofAddRecipientRequestObjectArray' => 'Boskee\\ProofHQ\\SOAPWorkflowProofAddRecipientRequestObjectArray',
      'SOAPTag' => 'Boskee\\ProofHQ\\SOAPTag',
      'SOAPTagArray' => 'Boskee\\ProofHQ\\SOAPTagArray',
      'IntArray' => 'Boskee\\ProofHQ\\IntArray',
      'SOAPActionObject' => 'Boskee\\ProofHQ\\SOAPActionObject',
      'SOAPActionObjectArray' => 'Boskee\\ProofHQ\\SOAPActionObjectArray',
      'SOAPPlanObjectArray' => 'Boskee\\ProofHQ\\SOAPPlanObjectArray',
      'SOAPDecisionObject' => 'Boskee\\ProofHQ\\SOAPDecisionObject',
      'SOAPDecisionObjectArray' => 'Boskee\\ProofHQ\\SOAPDecisionObjectArray',
      'SOAPDecisionReasonObject' => 'Boskee\\ProofHQ\\SOAPDecisionReasonObject',
      'SOAPDecisionReasonObjectArray' => 'Boskee\\ProofHQ\\SOAPDecisionReasonObjectArray',
      'SOAPWorkflowTemplateBasicObject' => 'Boskee\\ProofHQ\\SOAPWorkflowTemplateBasicObject',
      'SOAPWorkflowTemplateBasicObjectArray' => 'Boskee\\ProofHQ\\SOAPWorkflowTemplateBasicObjectArray',
      'SOAPWorkflowRecipientObject' => 'Boskee\\ProofHQ\\SOAPWorkflowRecipientObject',
      'SOAPWorkflowRecipientObjectArray' => 'Boskee\\ProofHQ\\SOAPWorkflowRecipientObjectArray',
      'SOAPWorkflowStageObject' => 'Boskee\\ProofHQ\\SOAPWorkflowStageObject',
      'SOAPWorkflowStageObjectArray' => 'Boskee\\ProofHQ\\SOAPWorkflowStageObjectArray',
      'SOAPWorkflowTemplateObject' => 'Boskee\\ProofHQ\\SOAPWorkflowTemplateObject',
      'SOAPWorkflowRecipientRequestObject' => 'Boskee\\ProofHQ\\SOAPWorkflowRecipientRequestObject',
      'SOAPWorkflowRecipientRequestObjectArray' => 'Boskee\\ProofHQ\\SOAPWorkflowRecipientRequestObjectArray',
      'SOAPWorkflowStageRequestObject' => 'Boskee\\ProofHQ\\SOAPWorkflowStageRequestObject',
      'SOAPWorkflowStageRequestObjectArray' => 'Boskee\\ProofHQ\\SOAPWorkflowStageRequestObjectArray',
      'SOAPWorkflowStageRequestUpdateObject' => 'Boskee\\ProofHQ\\SOAPWorkflowStageRequestUpdateObject',
      'SOAPWorkflowRecipientRequestUpdateObject' => 'Boskee\\ProofHQ\\SOAPWorkflowRecipientRequestUpdateObject',
      'SOAPWorkflowProofRecipientRequestObject' => 'Boskee\\ProofHQ\\SOAPWorkflowProofRecipientRequestObject',
      'SOAPWorkflowProofRecipientRequestObjectArray' => 'Boskee\\ProofHQ\\SOAPWorkflowProofRecipientRequestObjectArray',
      'SOAPWorkflowProofStageRequestObject' => 'Boskee\\ProofHQ\\SOAPWorkflowProofStageRequestObject',
      'SOAPWorkflowProofStageRequestObjectArray' => 'Boskee\\ProofHQ\\SOAPWorkflowProofStageRequestObjectArray',
      'SOAPWorkflowProofRecipientObjectArray' => 'Boskee\\ProofHQ\\SOAPWorkflowProofRecipientObjectArray',
      'SOAPWorkflowProofStageObject' => 'Boskee\\ProofHQ\\SOAPWorkflowProofStageObject',
      'SOAPWorkflowProofStageObjectArray' => 'Boskee\\ProofHQ\\SOAPWorkflowProofStageObjectArray',
      'SOAPWorkflowProofObject' => 'Boskee\\ProofHQ\\SOAPWorkflowProofObject',
      'SOAPWorkflowProofObjectArray' => 'Boskee\\ProofHQ\\SOAPWorkflowProofObjectArray',
      'SOAPWorkflowProofStageRequestUpdateObject' => 'Boskee\\ProofHQ\\SOAPWorkflowProofStageRequestUpdateObject',
      'SOAPCustomFieldOptionObject' => 'Boskee\\ProofHQ\\SOAPCustomFieldOptionObject',
      'SOAPCustomFieldOptionObjectArray' => 'Boskee\\ProofHQ\\SOAPCustomFieldOptionObjectArray',
      'SOAPCustomFieldObject' => 'Boskee\\ProofHQ\\SOAPCustomFieldObject',
      'SOAPCustomFieldObjectArray' => 'Boskee\\ProofHQ\\SOAPCustomFieldObjectArray',
      'SOAPSectionObject' => 'Boskee\\ProofHQ\\SOAPSectionObject',
      'SOAPSectionObjectArray' => 'Boskee\\ProofHQ\\SOAPSectionObjectArray',
      'SOAPGroupMemberObject' => 'Boskee\\ProofHQ\\SOAPGroupMemberObject',
      'SOAPGroupMemberObjectArray' => 'Boskee\\ProofHQ\\SOAPGroupMemberObjectArray',
      'SOAPGroupObject' => 'Boskee\\ProofHQ\\SOAPGroupObject',
      'SOAPGroupObjectArray' => 'Boskee\\ProofHQ\\SOAPGroupObjectArray',
      'SOAPActivityLogObject' => 'Boskee\\ProofHQ\\SOAPActivityLogObject',
      'SOAPActivityLogObjectArray' => 'Boskee\\ProofHQ\\SOAPActivityLogObjectArray',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://soap.proofhq.com/16_24_0/soap.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param string $Login
     * @param string $Password
     * @return SOAPLoginObject
     */
    public function doLogin($Login, $Password)
    {
      return $this->__soapCall('doLogin', array($Login, $Password));
    }

    /**
     * @param string $SessionID
     * @return SOAPFileUploadObjectArray
     */
    public function doUpload($SessionID)
    {
      return $this->__soapCall('doUpload', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @return int
     */
    public function createBatch($SessionID)
    {
      return $this->__soapCall('createBatch', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @param int $BatchID
     * @return boolean
     */
    public function finishBatch($SessionID, $BatchID)
    {
      return $this->__soapCall('finishBatch', array($SessionID, $BatchID));
    }

    /**
     * @param string $SessionID
     * @param int $OwnerID
     * @param string $Hash
     * @param string $Name
     * @param string $SourceName
     * @param string $Subject
     * @param string $Message
     * @param string $Deadline
     * @param string $Recipients
     * @param int $WorkspaceId
     * @param int $BatchID
     * @param string $SWF
     * @param boolean $SuppressNewFileNotification
     * @return SOAPFileObject
     */
    public function createFile($SessionID, $OwnerID, $Hash, $Name, $SourceName, $Subject, $Message, $Deadline, $Recipients, $WorkspaceId, $BatchID, $SWF, $SuppressNewFileNotification)
    {
      return $this->__soapCall('createFile', array($SessionID, $OwnerID, $Hash, $Name, $SourceName, $Subject, $Message, $Deadline, $Recipients, $WorkspaceId, $BatchID, $SWF, $SuppressNewFileNotification));
    }

    /**
     * @param string $SessionID
     * @param int $OwnerID
     * @param string $Hash
     * @param string $Name
     * @param string $SourceName
     * @param string $Subject
     * @param string $Message
     * @param string $Deadline
     * @param string $Recipients
     * @param int $WorkspaceId
     * @param int $BatchID
     * @param boolean $EnableSubscriptions
     * @param boolean $EnableSubscriptionsValidation
     * @param string $DefaultEmailNotifications
     * @param string $DefaultRole
     * @param boolean $AuthorizedOnly
     * @param boolean $EnableAutoLock
     * @param boolean $LockAfterFirstDecision
     * @param boolean $EnableDownload
     * @param boolean $EnableTeamURL
     * @param boolean $EnableEmbedPlayer
     * @param boolean $ShowDashboardLink
     * @param boolean $ShowWorkspaceLink
     * @param boolean $ShowDetailsPageLink
     * @param boolean $ShowVersionsLink
     * @param boolean $ShowHelpLink
     * @param boolean $ShowHelpQuickStartLink
     * @param boolean $ShowHelpUserGuideLink
     * @param boolean $ShowHelpWelcomeScreenLink
     * @param boolean $ShowHelpForumLink
     * @param boolean $ShowHelpBlogLink
     * @param string $CustomLinkUrl
     * @param string $CustomLinkLabel
     * @param boolean $SuppressNewProofNotification
     * @param string $SWF
     * @param boolean $ShowDashboardFunctions
     * @param boolean $ShowCloseIcon
     * @param boolean $ShowPublishToTheWeb
     * @param boolean $ShowPrintComments
     * @param boolean $ShowEmailAlertSettings
     * @param boolean $EnableElectronicSignatures
     * @param boolean $ShowSendDecisionConfirmationCheckbox
     * @param boolean $ClassicProofViewer
     * @param boolean $DisableSubscriptionEmail
     * @param boolean $DisableExcelSummary
     * @param boolean $DisablePdfSummary
     * @param boolean $ShowProofDetails
     * @param boolean $ShowProofWorkflow
     * @param string $ReferenceID
     * @return SOAPFileObject
     */
    public function createProof($SessionID, $OwnerID, $Hash, $Name, $SourceName, $Subject, $Message, $Deadline, $Recipients, $WorkspaceId, $BatchID, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $LockAfterFirstDecision, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $EnableElectronicSignatures, $ShowSendDecisionConfirmationCheckbox, $ClassicProofViewer, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID)
    {
      return $this->__soapCall('createProof', array($SessionID, $OwnerID, $Hash, $Name, $SourceName, $Subject, $Message, $Deadline, $Recipients, $WorkspaceId, $BatchID, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $LockAfterFirstDecision, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $EnableElectronicSignatures, $ShowSendDecisionConfirmationCheckbox, $ClassicProofViewer, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID));
    }

    /**
     * @param string $SessionID
     * @param string $ParentFileID
     * @param int $OwnerID
     * @param string $Hash
     * @param string $Name
     * @param string $SourceName
     * @param string $Subject
     * @param string $Message
     * @param string $Deadline
     * @param string $Recipients
     * @param int $WorkspaceId
     * @param int $BatchID
     * @param boolean $EnableSubscriptions
     * @param boolean $EnableSubscriptionsValidation
     * @param string $DefaultEmailNotifications
     * @param string $DefaultRole
     * @param boolean $AuthorizedOnly
     * @param boolean $EnableAutoLock
     * @param boolean $LockAfterFirstDecision
     * @param boolean $EnableDownload
     * @param boolean $EnableTeamURL
     * @param boolean $EnableEmbedPlayer
     * @param boolean $ShowDashboardLink
     * @param boolean $ShowWorkspaceLink
     * @param boolean $ShowDetailsPageLink
     * @param boolean $ShowVersionsLink
     * @param boolean $ShowHelpLink
     * @param boolean $ShowHelpQuickStartLink
     * @param boolean $ShowHelpUserGuideLink
     * @param boolean $ShowHelpWelcomeScreenLink
     * @param boolean $ShowHelpForumLink
     * @param boolean $ShowHelpBlogLink
     * @param string $CustomLinkUrl
     * @param string $CustomLinkLabel
     * @param boolean $SuppressNewProofNotification
     * @param string $SWF
     * @param boolean $ShowDashboardFunctions
     * @param boolean $ShowCloseIcon
     * @param boolean $ShowPublishToTheWeb
     * @param boolean $ShowPrintComments
     * @param boolean $ShowEmailAlertSettings
     * @param boolean $EnableElectronicSignatures
     * @param boolean $ShowSendDecisionConfirmationCheckbox
     * @param boolean $DisableSubscriptionEmail
     * @param boolean $DisableExcelSummary
     * @param boolean $DisablePdfSummary
     * @param boolean $ShowProofDetails
     * @param boolean $ShowProofWorkflow
     * @param string $ReferenceID
     * @return SOAPFileObject
     */
    public function createProofVersion($SessionID, $ParentFileID, $OwnerID, $Hash, $Name, $SourceName, $Subject, $Message, $Deadline, $Recipients, $WorkspaceId, $BatchID, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $LockAfterFirstDecision, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $EnableElectronicSignatures, $ShowSendDecisionConfirmationCheckbox, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID)
    {
      return $this->__soapCall('createProofVersion', array($SessionID, $ParentFileID, $OwnerID, $Hash, $Name, $SourceName, $Subject, $Message, $Deadline, $Recipients, $WorkspaceId, $BatchID, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $LockAfterFirstDecision, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $EnableElectronicSignatures, $ShowSendDecisionConfirmationCheckbox, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param int $OwnerID
     * @param string $Name
     * @param string $Subject
     * @param string $Message
     * @param int $WorkspaceId
     * @param boolean $EnableSubscriptions
     * @param boolean $EnableSubscriptionsValidation
     * @param string $DefaultEmailNotifications
     * @param string $DefaultRole
     * @param boolean $AuthorizedOnly
     * @param boolean $EnableAutoclose
     * @param boolean $EnableOneDecision
     * @param boolean $EnableDownload
     * @param boolean $EnableTeamURL
     * @param boolean $EnableEmbedPlayer
     * @param boolean $ShowDashboardLink
     * @param boolean $ShowWorkspaceLink
     * @param boolean $ShowDetailsPageLink
     * @param boolean $ShowVersionsLink
     * @param boolean $ShowHelpLink
     * @param boolean $ShowHelpQuickStartLink
     * @param boolean $ShowHelpUserGuideLink
     * @param boolean $ShowHelpWelcomeScreenLink
     * @param boolean $ShowHelpForumLink
     * @param boolean $ShowHelpBlogLink
     * @param string $CustomLinkUrl
     * @param string $CustomLinkLabel
     * @param string $SWF
     * @param boolean $ShowDashboardFunctions
     * @param string $PrimaryDecisionMakerReviewerID
     * @param boolean $ShowCloseIcon
     * @param boolean $ShowPublishToTheWeb
     * @param boolean $ShowPrintComments
     * @param boolean $ShowEmailAlertSettings
     * @param boolean $ShowSendDecisionConfirmationCheckbox
     * @param boolean $SuppressNewOwnerNotification
     * @param boolean $DisableSubscriptionEmail
     * @param boolean $ShowProofDetails
     * @param boolean $ShowProofWorkflow
     * @param string $ReferenceID
     * @return SOAPFileObject
     */
    public function updateProof($SessionID, $FileID, $OwnerID, $Name, $Subject, $Message, $WorkspaceId, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoclose, $EnableOneDecision, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SWF, $ShowDashboardFunctions, $PrimaryDecisionMakerReviewerID, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $ShowSendDecisionConfirmationCheckbox, $SuppressNewOwnerNotification, $DisableSubscriptionEmail, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID)
    {
      return $this->__soapCall('updateProof', array($SessionID, $FileID, $OwnerID, $Name, $Subject, $Message, $WorkspaceId, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoclose, $EnableOneDecision, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SWF, $ShowDashboardFunctions, $PrimaryDecisionMakerReviewerID, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $ShowSendDecisionConfirmationCheckbox, $SuppressNewOwnerNotification, $DisableSubscriptionEmail, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID));
    }

    /**
     * @param string $SessionID
     * @param string $FileID
     * @param boolean $Permanent
     * @param boolean $AllVersions
     * @return boolean
     */
    public function deleteProof($SessionID, $FileID, $Permanent, $AllVersions)
    {
      return $this->__soapCall('deleteProof', array($SessionID, $FileID, $Permanent, $AllVersions));
    }

    /**
     * @param string $SessionID
     * @param string $FileID
     * @return boolean
     */
    public function lockProof($SessionID, $FileID)
    {
      return $this->__soapCall('lockProof', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param string $FileID
     * @return boolean
     */
    public function unlockProof($SessionID, $FileID)
    {
      return $this->__soapCall('unlockProof', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param string $FileID
     * @param string $StageID
     * @return boolean
     */
    public function lockWorkflowProofStage($SessionID, $FileID, $StageID)
    {
      return $this->__soapCall('lockWorkflowProofStage', array($SessionID, $FileID, $StageID));
    }

    /**
     * @param string $SessionID
     * @param string $FileID
     * @return boolean
     */
    public function archiveProof($SessionID, $FileID)
    {
      return $this->__soapCall('archiveProof', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param string $FileID
     * @return boolean
     */
    public function unarchiveProof($SessionID, $FileID)
    {
      return $this->__soapCall('unarchiveProof', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param string $FileID
     * @return boolean
     */
    public function archiveProofVersion($SessionID, $FileID)
    {
      return $this->__soapCall('archiveProofVersion', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param string $FileID
     * @return boolean
     */
    public function unarchiveProofVersion($SessionID, $FileID)
    {
      return $this->__soapCall('unarchiveProofVersion', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param string $ReviewerID
     * @return boolean
     */
    public function deleteProofReviewer($SessionID, $ReviewerID)
    {
      return $this->__soapCall('deleteProofReviewer', array($SessionID, $ReviewerID));
    }

    /**
     * @param string $SessionID
     * @param string $FileID
     * @param string $RecipientEmail
     * @param string $RecipientName
     * @param string $RecipientPosition
     * @param string $RecipientDeadline
     * @param string $RecipientRole
     * @param string $RecipientEmailNotifications
     * @param boolean $SuppressNewProofNotification
     * @param string $PrimaryDecisionMaker
     * @return SOAPRecipientObject
     */
    public function addProofReviewer($SessionID, $FileID, $RecipientEmail, $RecipientName, $RecipientPosition, $RecipientDeadline, $RecipientRole, $RecipientEmailNotifications, $SuppressNewProofNotification, $PrimaryDecisionMaker)
    {
      return $this->__soapCall('addProofReviewer', array($SessionID, $FileID, $RecipientEmail, $RecipientName, $RecipientPosition, $RecipientDeadline, $RecipientRole, $RecipientEmailNotifications, $SuppressNewProofNotification, $PrimaryDecisionMaker));
    }

    /**
     * @param string $SessionID
     * @param string $RecipientID
     * @param string $RecipientDecision
     * @param string $RecipientDeadline
     * @param string $RecipientName
     * @param string $RecipientPosition
     * @param string $RecipientRole
     * @param string $RecipientEmailNotifications
     * @param string $PrimaryDecisionMaker
     * @return SOAPRecipientObject
     */
    public function updateProofReviewer($SessionID, $RecipientID, $RecipientDecision, $RecipientDeadline, $RecipientName, $RecipientPosition, $RecipientRole, $RecipientEmailNotifications, $PrimaryDecisionMaker)
    {
      return $this->__soapCall('updateProofReviewer', array($SessionID, $RecipientID, $RecipientDecision, $RecipientDeadline, $RecipientName, $RecipientPosition, $RecipientRole, $RecipientEmailNotifications, $PrimaryDecisionMaker));
    }

    /**
     * @param string $SessionID
     * @param int $StageID
     * @param SOAPWorkflowProofRecipientRequestUpdateObject $Recipient
     * @return SOAPWorkflowProofRecipientObject
     */
    public function updateWorkflowProofReviewer($SessionID, $StageID, SOAPWorkflowProofRecipientRequestUpdateObject $Recipient)
    {
      return $this->__soapCall('updateWorkflowProofReviewer', array($SessionID, $StageID, $Recipient));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param int $Offset
     * @return SOAPFileActivityObjectArray
     */
    public function getActivity($SessionID, $FileID, $Offset)
    {
      return $this->__soapCall('getActivity', array($SessionID, $FileID, $Offset));
    }

    /**
     * @param string $SessionID
     * @return SOAPProfileObjectArray
     */
    public function getOwners($SessionID)
    {
      return $this->__soapCall('getOwners', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @param int $Offset
     * @return SOAPContactObjectArray
     */
    public function getPeople($SessionID, $Offset)
    {
      return $this->__soapCall('getPeople', array($SessionID, $Offset));
    }

    /**
     * @param string $SessionID
     * @return SOAPContactGroupObjectArray
     */
    public function getPeopleGroups($SessionID)
    {
      return $this->__soapCall('getPeopleGroups', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @return SOAPContactAccountObjectArray
     */
    public function getPeopleAccounts($SessionID)
    {
      return $this->__soapCall('getPeopleAccounts', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @return SOAPWorkspaceObjectArray
     */
    public function getWorkspaces($SessionID)
    {
      return $this->__soapCall('getWorkspaces', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @param int $ParentWorkspaceID
     * @param string $Name
     * @param string $Description
     * @param string $Client
     * @param string $Project
     * @param boolean $Personal
     * @param int $OwnerID
     * @return SOAPWorkspaceObject
     */
    public function createWorkspace($SessionID, $ParentWorkspaceID, $Name, $Description, $Client, $Project, $Personal, $OwnerID)
    {
      return $this->__soapCall('createWorkspace', array($SessionID, $ParentWorkspaceID, $Name, $Description, $Client, $Project, $Personal, $OwnerID));
    }

    /**
     * @param string $SessionID
     * @param int $WorkspaceID
     * @param int $ParentWorkspaceID
     * @return SOAPWorkspaceObject
     */
    public function moveWorkspace($SessionID, $WorkspaceID, $ParentWorkspaceID)
    {
      return $this->__soapCall('moveWorkspace', array($SessionID, $WorkspaceID, $ParentWorkspaceID));
    }

    /**
     * @param string $SessionID
     * @param int $WorkspaceID
     * @param int $ParentWorkspaceID
     * @param string $Name
     * @param string $Description
     * @param string $Client
     * @param string $Project
     * @param boolean $Personal
     * @param int $OwnerID
     * @return SOAPWorkspaceObject
     */
    public function updateWorkspace($SessionID, $WorkspaceID, $ParentWorkspaceID, $Name, $Description, $Client, $Project, $Personal, $OwnerID)
    {
      return $this->__soapCall('updateWorkspace', array($SessionID, $WorkspaceID, $ParentWorkspaceID, $Name, $Description, $Client, $Project, $Personal, $OwnerID));
    }

    /**
     * @param string $SessionID
     * @param int $WorkspaceID
     * @return boolean
     */
    public function deleteWorkspace($SessionID, $WorkspaceID)
    {
      return $this->__soapCall('deleteWorkspace', array($SessionID, $WorkspaceID));
    }

    /**
     * @param string $SessionID
     * @param int $StartFrom
     * @param string $SearchQuery
     * @param int $ItemsPerPage
     * @return SOAPFileObjectArray
     */
    public function getAllProofs($SessionID, $StartFrom, $SearchQuery, $ItemsPerPage)
    {
      return $this->__soapCall('getAllProofs', array($SessionID, $StartFrom, $SearchQuery, $ItemsPerPage));
    }

    /**
     * @param string $SessionID
     * @param string $ListViewID
     * @param int $StartFrom
     * @param int $ItemsPerPage
     * @param AnyTypeArray $ExcludedMediaTypes
     * @param boolean $SendArchivedProofs
     * @return SOAPFileListViewCollectionObject
     */
    public function getProofsByListView($SessionID, $ListViewID, $StartFrom, $ItemsPerPage, AnyTypeArray $ExcludedMediaTypes, $SendArchivedProofs)
    {
      return $this->__soapCall('getProofsByListView', array($SessionID, $ListViewID, $StartFrom, $ItemsPerPage, $ExcludedMediaTypes, $SendArchivedProofs));
    }

    /**
     * @param string $SessionID
     * @param int $StartFrom
     * @param string $SearchQuery
     * @param int $ItemsPerPage
     * @return SOAPFileObjectArray
     */
    public function getClosedProofs($SessionID, $StartFrom, $SearchQuery, $ItemsPerPage)
    {
      return $this->__soapCall('getClosedProofs', array($SessionID, $StartFrom, $SearchQuery, $ItemsPerPage));
    }

    /**
     * @param string $SessionID
     * @param int $StartFrom
     * @param string $SearchQuery
     * @param int $ItemsPerPage
     * @return SOAPFileObjectArray
     */
    public function getLateProofs($SessionID, $StartFrom, $SearchQuery, $ItemsPerPage)
    {
      return $this->__soapCall('getLateProofs', array($SessionID, $StartFrom, $SearchQuery, $ItemsPerPage));
    }

    /**
     * @param string $SessionID
     * @param int $StartFrom
     * @param string $SearchQuery
     * @param int $ItemsPerPage
     * @return SOAPFileObjectArray
     */
    public function getOpenProofs($SessionID, $StartFrom, $SearchQuery, $ItemsPerPage)
    {
      return $this->__soapCall('getOpenProofs', array($SessionID, $StartFrom, $SearchQuery, $ItemsPerPage));
    }

    /**
     * @param string $SessionID
     * @param int $StartFrom
     * @param string $SearchQuery
     * @param int $ItemsPerPage
     * @return SOAPFileObjectArray
     */
    public function getArchivedProofs($SessionID, $StartFrom, $SearchQuery, $ItemsPerPage)
    {
      return $this->__soapCall('getArchivedProofs', array($SessionID, $StartFrom, $SearchQuery, $ItemsPerPage));
    }

    /**
     * @param string $SessionID
     * @param int $UserID
     * @return SOAPFileObjectArray
     */
    public function getProofsByOwnership($SessionID, $UserID)
    {
      return $this->__soapCall('getProofsByOwnership', array($SessionID, $UserID));
    }

    /**
     * @param string $SessionID
     * @param string $FileID
     * @return SOAPRecipientObjectArray
     */
    public function getProofReviewers($SessionID, $FileID)
    {
      return $this->__soapCall('getProofReviewers', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @return SOAPCommentObjectArray
     */
    public function getProofComments($SessionID, $FileID)
    {
      return $this->__soapCall('getProofComments', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param int $CommentID
     * @return SOAPCommentReplyObjectArray
     */
    public function getProofCommentReplies($SessionID, $FileID, $CommentID)
    {
      return $this->__soapCall('getProofCommentReplies', array($SessionID, $FileID, $CommentID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @return SOAPFileObject
     */
    public function getProofDetails($SessionID, $FileID)
    {
      return $this->__soapCall('getProofDetails', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param string $Referer
     * @return string
     */
    public function getProofEmbedCode($SessionID, $FileID, $Referer)
    {
      return $this->__soapCall('getProofEmbedCode', array($SessionID, $FileID, $Referer));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param string $Referer
     * @return string
     */
    public function getPersonalProofEmbedCode($SessionID, $FileID, $Referer)
    {
      return $this->__soapCall('getPersonalProofEmbedCode', array($SessionID, $FileID, $Referer));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param string $ReviewerID
     * @param string $Referer
     * @return string
     */
    public function getProofReviewerEmbedCode($SessionID, $FileID, $ReviewerID, $Referer)
    {
      return $this->__soapCall('getProofReviewerEmbedCode', array($SessionID, $FileID, $ReviewerID, $Referer));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param string $Referer
     * @return SOAPFileEmbedCodeObjectArray
     */
    public function getProofEmbedCodes($SessionID, $FileID, $Referer)
    {
      return $this->__soapCall('getProofEmbedCodes', array($SessionID, $FileID, $Referer));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @return string
     */
    public function getProofStatus($SessionID, $FileID)
    {
      return $this->__soapCall('getProofStatus', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param int $Type
     * @return SOAPImageObject
     */
    public function getProofThumbnail($SessionID, $FileID, $Type)
    {
      return $this->__soapCall('getProofThumbnail', array($SessionID, $FileID, $Type));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @return string
     */
    public function getProofURL($SessionID, $FileID)
    {
      return $this->__soapCall('getProofURL', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @return SOAPFileObjectArray
     */
    public function getProofVersions($SessionID, $FileID)
    {
      return $this->__soapCall('getProofVersions', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @return boolean
     */
    public function deleteProofLink($SessionID)
    {
      return $this->__soapCall('deleteProofLink', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @return boolean
     */
    public function addProofLinks($SessionID)
    {
      return $this->__soapCall('addProofLinks', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @return boolean
     */
    public function getProofLinks($SessionID)
    {
      return $this->__soapCall('getProofLinks', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @return boolean
     */
    public function setProofMenus($SessionID)
    {
      return $this->__soapCall('setProofMenus', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @param string $Timezone
     * @param string $OrganisationName
     * @param string $EmailAddress
     * @param string $FirstName
     * @param string $LastName
     * @param string $Password
     * @param string $ConfirmPassword
     * @param boolean $SendConfirmationEmail
     * @param string $OpenID
     * @param string $Promocode
     * @param string $UserAgent
     * @param boolean $DisableProofEmails
     * @param string $Telephone
     * @param string $ReferenceID
     * @return SOAPAccountObject
     */
    public function createAccount($SessionID, $Timezone, $OrganisationName, $EmailAddress, $FirstName, $LastName, $Password, $ConfirmPassword, $SendConfirmationEmail, $OpenID, $Promocode, $UserAgent, $DisableProofEmails, $Telephone, $ReferenceID)
    {
      return $this->__soapCall('createAccount', array($SessionID, $Timezone, $OrganisationName, $EmailAddress, $FirstName, $LastName, $Password, $ConfirmPassword, $SendConfirmationEmail, $OpenID, $Promocode, $UserAgent, $DisableProofEmails, $Telephone, $ReferenceID));
    }

    /**
     * @param string $SessionID
     * @param string $OrganisationName
     * @param string $Street
     * @param string $City
     * @param string $State
     * @param string $Postcode
     * @param string $Country
     * @param string $Telephone
     * @param string $Mobile
     * @param string $Fax
     * @param boolean $DisableProofEmails
     * @param string $ReferenceID
     * @param int $AccountID
     * @return SOAPAccountObject
     */
    public function updateAccount($SessionID, $OrganisationName, $Street, $City, $State, $Postcode, $Country, $Telephone, $Mobile, $Fax, $DisableProofEmails, $ReferenceID, $AccountID)
    {
      return $this->__soapCall('updateAccount', array($SessionID, $OrganisationName, $Street, $City, $State, $Postcode, $Country, $Telephone, $Mobile, $Fax, $DisableProofEmails, $ReferenceID, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param string $Name
     * @param string $Timezone
     * @param string $Promocode
     * @param boolean $DisableProofEmails
     * @param string $ReferenceID
     * @return SOAPSatelliteAccountObject
     */
    public function createSatelliteAccount($SessionID, $Name, $Timezone, $Promocode, $DisableProofEmails, $ReferenceID)
    {
      return $this->__soapCall('createSatelliteAccount', array($SessionID, $Name, $Timezone, $Promocode, $DisableProofEmails, $ReferenceID));
    }

    /**
     * @param string $SessionID
     * @param int $PasswordLength
     * @param int $LowercaseCharacters
     * @param int $UppercaseCharacters
     * @param int $NumericCharacters
     * @param int $SymbolCharacters
     * @param int $CharactersRepetition
     * @param int $PasswordLifetime
     * @param int $BruteforceAttempts
     * @param int $BruteforceLockTime
     * @return SOAPAccountPasswordSettingsObject
     */
    public function setAccountPasswordSettings($SessionID, $PasswordLength, $LowercaseCharacters, $UppercaseCharacters, $NumericCharacters, $SymbolCharacters, $CharactersRepetition, $PasswordLifetime, $BruteforceAttempts, $BruteforceLockTime)
    {
      return $this->__soapCall('setAccountPasswordSettings', array($SessionID, $PasswordLength, $LowercaseCharacters, $UppercaseCharacters, $NumericCharacters, $SymbolCharacters, $CharactersRepetition, $PasswordLifetime, $BruteforceAttempts, $BruteforceLockTime));
    }

    /**
     * @param string $SessionID
     * @param string $OnLoadMessage
     * @param string $OnDecisionMessage
     * @param string $ConfirmButton
     * @param string $CancelButton
     * @return SOAPAccountProofingDefaultsObject
     */
    public function setAccountProofingDefaults($SessionID, $OnLoadMessage, $OnDecisionMessage, $ConfirmButton, $CancelButton)
    {
      return $this->__soapCall('setAccountProofingDefaults', array($SessionID, $OnLoadMessage, $OnDecisionMessage, $ConfirmButton, $CancelButton));
    }

    /**
     * @param string $SessionID
     * @param int $AccountID
     * @return SOAPAccountObject
     */
    public function getAccountDetails($SessionID, $AccountID)
    {
      return $this->__soapCall('getAccountDetails', array($SessionID, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param int $AccountID
     * @param string $EmailAddress
     * @param string $FirstName
     * @param string $LastName
     * @param string $Position
     * @param int $PermissionsID
     * @param string $Password
     * @param string $ConfirmPassword
     * @param boolean $SendConfirmationEmail
     * @param string $OpenID
     * @param string $Timezone
     * @param boolean $ProductMarketingEmails
     * @param boolean $APIOnly
     * @param boolean $SendProofReadyEmail
     * @param int $DefaultEmailNotifications
     * @param string $ReferenceID
     * @return SOAPUserObject
     */
    public function addUser($SessionID, $AccountID, $EmailAddress, $FirstName, $LastName, $Position, $PermissionsID, $Password, $ConfirmPassword, $SendConfirmationEmail, $OpenID, $Timezone, $ProductMarketingEmails, $APIOnly, $SendProofReadyEmail, $DefaultEmailNotifications, $ReferenceID)
    {
      return $this->__soapCall('addUser', array($SessionID, $AccountID, $EmailAddress, $FirstName, $LastName, $Position, $PermissionsID, $Password, $ConfirmPassword, $SendConfirmationEmail, $OpenID, $Timezone, $ProductMarketingEmails, $APIOnly, $SendProofReadyEmail, $DefaultEmailNotifications, $ReferenceID));
    }

    /**
     * @param string $SessionID
     * @param int $UserID
     * @param string $FirstName
     * @param string $LastName
     * @param string $Position
     * @param int $PermissionsID
     * @param string $Street
     * @param string $City
     * @param string $State
     * @param string $Postcode
     * @param string $Country
     * @param string $Telephone
     * @param string $Mobile
     * @param string $Fax
     * @param string $Language
     * @param string $Timezone
     * @param string $DateFormat
     * @param string $OpenID
     * @param boolean $ProductMarketingEmails
     * @param boolean $APIOnly
     * @param int $AccountID
     * @param boolean $SendProofReadyEmail
     * @param int $DefaultEmailNotifications
     * @param boolean $UpdateExistingProofsEmailNotifications
     * @param string $ReferenceID
     * @return SOAPUserObject
     */
    public function updateUser($SessionID, $UserID, $FirstName, $LastName, $Position, $PermissionsID, $Street, $City, $State, $Postcode, $Country, $Telephone, $Mobile, $Fax, $Language, $Timezone, $DateFormat, $OpenID, $ProductMarketingEmails, $APIOnly, $AccountID, $SendProofReadyEmail, $DefaultEmailNotifications, $UpdateExistingProofsEmailNotifications, $ReferenceID)
    {
      return $this->__soapCall('updateUser', array($SessionID, $UserID, $FirstName, $LastName, $Position, $PermissionsID, $Street, $City, $State, $Postcode, $Country, $Telephone, $Mobile, $Fax, $Language, $Timezone, $DateFormat, $OpenID, $ProductMarketingEmails, $APIOnly, $AccountID, $SendProofReadyEmail, $DefaultEmailNotifications, $UpdateExistingProofsEmailNotifications, $ReferenceID));
    }

    /**
     * @param string $SessionID
     * @param int $UserID
     * @return SOAPUserObject
     */
    public function getUserDetails($SessionID, $UserID)
    {
      return $this->__soapCall('getUserDetails', array($SessionID, $UserID));
    }

    /**
     * @param string $SessionID
     * @param int $UserID
     * @param int $AccountID
     * @return boolean
     */
    public function activateUser($SessionID, $UserID, $AccountID)
    {
      return $this->__soapCall('activateUser', array($SessionID, $UserID, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param int $UserID
     * @param int $AccountID
     * @return boolean
     */
    public function deactivateUser($SessionID, $UserID, $AccountID)
    {
      return $this->__soapCall('deactivateUser', array($SessionID, $UserID, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param int $UserID
     * @param string $Password
     * @param int $AccountID
     * @return boolean
     */
    public function updateUserPassword($SessionID, $UserID, $Password, $AccountID)
    {
      return $this->__soapCall('updateUserPassword', array($SessionID, $UserID, $Password, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param int $UserID
     * @param int $NewOwnerID
     * @param int $AccountID
     * @return boolean
     */
    public function deleteUser($SessionID, $UserID, $NewOwnerID, $AccountID)
    {
      return $this->__soapCall('deleteUser', array($SessionID, $UserID, $NewOwnerID, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param int $AccountID
     * @return SOAPUserObjectArray
     */
    public function getUsers($SessionID, $AccountID)
    {
      return $this->__soapCall('getUsers', array($SessionID, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param int $AccountID
     * @return SOAPCallbackObjectArray
     */
    public function getAccountCallbacks($SessionID, $AccountID)
    {
      return $this->__soapCall('getAccountCallbacks', array($SessionID, $AccountID));
    }

    /**
     * @param string $SessionID
     * @return SOAPSatelliteAccountObjectArray
     */
    public function getSatelliteAccounts($SessionID)
    {
      return $this->__soapCall('getSatelliteAccounts', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @param string $Type
     * @param string $Url
     * @param int $RetryInterval
     * @param int $AccountID
     * @return SOAPCallbackObject
     */
    public function setAccountCallback($SessionID, $Type, $Url, $RetryInterval, $AccountID)
    {
      return $this->__soapCall('setAccountCallback', array($SessionID, $Type, $Url, $RetryInterval, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param string $Type
     * @param int $AccountID
     * @return boolean
     */
    public function removeAccountCallback($SessionID, $Type, $AccountID)
    {
      return $this->__soapCall('removeAccountCallback', array($SessionID, $Type, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param string $Type
     * @param int $FileID
     * @return boolean
     */
    public function removeProofCallback($SessionID, $Type, $FileID)
    {
      return $this->__soapCall('removeProofCallback', array($SessionID, $Type, $FileID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @return SOAPCallbackObjectArray
     */
    public function getProofCallbacks($SessionID, $FileID)
    {
      return $this->__soapCall('getProofCallbacks', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param string $Type
     * @param string $Url
     * @param int $RetryInterval
     * @return SOAPCallbackObject
     */
    public function setProofCallback($SessionID, $FileID, $Type, $Url, $RetryInterval)
    {
      return $this->__soapCall('setProofCallback', array($SessionID, $FileID, $Type, $Url, $RetryInterval));
    }

    /**
     * @param string $Email
     * @param string $FirstName
     * @param string $LastName
     * @param string $OrganisationName
     * @return boolean
     */
    public function orderSampleProof($Email, $FirstName, $LastName, $OrganisationName)
    {
      return $this->__soapCall('orderSampleProof', array($Email, $FirstName, $LastName, $OrganisationName));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param SOAPFileRecipientObjectArray $Recipients
     * @param boolean $SuppressNewProofNotification
     * @return boolean
     */
    public function addProofReviewers($SessionID, $FileID, SOAPFileRecipientObjectArray $Recipients, $SuppressNewProofNotification)
    {
      return $this->__soapCall('addProofReviewers', array($SessionID, $FileID, $Recipients, $SuppressNewProofNotification));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param SOAPWorkflowProofAddRecipientRequestObjectArray $Recipients
     * @param boolean $SuppressNewProofNotification
     * @return boolean
     */
    public function addWorkflowProofReviewers($SessionID, $FileID, SOAPWorkflowProofAddRecipientRequestObjectArray $Recipients, $SuppressNewProofNotification)
    {
      return $this->__soapCall('addWorkflowProofReviewers', array($SessionID, $FileID, $Recipients, $SuppressNewProofNotification));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param SOAPWorkflowProofAddRecipientRequestObject $Recipient
     * @param boolean $SuppressNewProofNotification
     * @return SOAPWorkflowProofRecipientObject
     */
    public function addWorkflowProofReviewer($SessionID, $FileID, SOAPWorkflowProofAddRecipientRequestObject $Recipient, $SuppressNewProofNotification)
    {
      return $this->__soapCall('addWorkflowProofReviewer', array($SessionID, $FileID, $Recipient, $SuppressNewProofNotification));
    }

    /**
     * @param string $SessionID
     * @param string $BatchID
     * @param SOAPFileRecipientObjectArray $Recipients
     * @return boolean
     */
    public function addBatchProofReviewers($SessionID, $BatchID, SOAPFileRecipientObjectArray $Recipients)
    {
      return $this->__soapCall('addBatchProofReviewers', array($SessionID, $BatchID, $Recipients));
    }

    /**
     * @param string $SessionID
     * @return SOAPTagArray
     */
    public function getTags($SessionID)
    {
      return $this->__soapCall('getTags', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @param string $TagName
     * @return SOAPTag
     */
    public function addTag($SessionID, $TagName)
    {
      return $this->__soapCall('addTag', array($SessionID, $TagName));
    }

    /**
     * @param string $SessionID
     * @param int $TagID
     * @param string $TagName
     * @return SOAPTag
     */
    public function updateTag($SessionID, $TagID, $TagName)
    {
      return $this->__soapCall('updateTag', array($SessionID, $TagID, $TagName));
    }

    /**
     * @param string $SessionID
     * @param int $TagID
     * @return boolean
     */
    public function deleteTag($SessionID, $TagID)
    {
      return $this->__soapCall('deleteTag', array($SessionID, $TagID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @return SOAPTagArray
     */
    public function getProofTags($SessionID, $FileID)
    {
      return $this->__soapCall('getProofTags', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param IntArray $TagID
     * @return SOAPTagArray
     */
    public function removeProofTags($SessionID, $FileID, IntArray $TagID)
    {
      return $this->__soapCall('removeProofTags', array($SessionID, $FileID, $TagID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param IntArray $TagID
     * @return SOAPTagArray
     */
    public function addProofTags($SessionID, $FileID, IntArray $TagID)
    {
      return $this->__soapCall('addProofTags', array($SessionID, $FileID, $TagID));
    }

    /**
     * @param string $SessionID
     * @param string $EmailPhrase
     * @param int $AccountID
     * @return SOAPUserObjectArray
     */
    public function findUsersByEmail($SessionID, $EmailPhrase, $AccountID)
    {
      return $this->__soapCall('findUsersByEmail', array($SessionID, $EmailPhrase, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param string $OldEmail
     * @param string $NewEmail
     * @return boolean
     */
    public function updateContactEmail($SessionID, $OldEmail, $NewEmail)
    {
      return $this->__soapCall('updateContactEmail', array($SessionID, $OldEmail, $NewEmail));
    }

    /**
     * @param string $SessionID
     * @param string $UserID
     * @param string $NewEmail
     * @param boolean $Confirm
     * @param int $AccountID
     * @return boolean
     */
    public function updateUserEmail($SessionID, $UserID, $NewEmail, $Confirm, $AccountID)
    {
      return $this->__soapCall('updateUserEmail', array($SessionID, $UserID, $NewEmail, $Confirm, $AccountID));
    }

    /**
     * @param string $EmailAddress
     * @param string $AuthToken
     * @return SOAPLoginObject
     */
    public function getSessionId($EmailAddress, $AuthToken)
    {
      return $this->__soapCall('getSessionId', array($EmailAddress, $AuthToken));
    }

    /**
     * @param string $SessionID
     * @return boolean
     */
    public function checkSession($SessionID)
    {
      return $this->__soapCall('checkSession', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @return boolean
     */
    public function doLogout($SessionID)
    {
      return $this->__soapCall('doLogout', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @return string
     */
    public function getProofDownloadURL($SessionID, $FileID)
    {
      return $this->__soapCall('getProofDownloadURL', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param int $AccountID
     * @return SOAPActionObjectArray
     */
    public function getActions($SessionID, $AccountID)
    {
      return $this->__soapCall('getActions', array($SessionID, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param int $CommentID
     * @return SOAPActionObject
     */
    public function getCommentAction($SessionID, $CommentID)
    {
      return $this->__soapCall('getCommentAction', array($SessionID, $CommentID));
    }

    /**
     * @param string $SessionID
     * @param int $CommentID
     * @param int $ActionID
     * @return boolean
     */
    public function setCommentAction($SessionID, $CommentID, $ActionID)
    {
      return $this->__soapCall('setCommentAction', array($SessionID, $CommentID, $ActionID));
    }

    /**
     * @param string $SessionID
     * @return boolean
     */
    public function getFileDownloadLink($SessionID)
    {
      return $this->__soapCall('getFileDownloadLink', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param int $ReviewerID
     * @param int $CommentID
     * @param string $Reply
     * @return SOAPCommentReplyObject
     */
    public function addCommentReply($SessionID, $FileID, $ReviewerID, $CommentID, $Reply)
    {
      return $this->__soapCall('addCommentReply', array($SessionID, $FileID, $ReviewerID, $CommentID, $Reply));
    }

    /**
     * @param string $SessionID
     * @param int $CommentID
     * @return SOAPImageObject
     */
    public function getCommentThumbnail($SessionID, $CommentID)
    {
      return $this->__soapCall('getCommentThumbnail', array($SessionID, $CommentID));
    }

    /**
     * @param string $SessionID
     * @param string $EncodedProofID
     * @return int
     */
    public function decodeProofID($SessionID, $EncodedProofID)
    {
      return $this->__soapCall('decodeProofID', array($SessionID, $EncodedProofID));
    }

    /**
     * @param string $SessionID
     * @return SOAPPlanObjectArray
     */
    public function getBillingPlans($SessionID)
    {
      return $this->__soapCall('getBillingPlans', array($SessionID));
    }

    /**
     * @param string $SessionID
     * @param string $PlanID
     * @param string $AccountID
     * @return SOAPMembershipObject
     */
    public function updateBillingPlan($SessionID, $PlanID, $AccountID)
    {
      return $this->__soapCall('updateBillingPlan', array($SessionID, $PlanID, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param int $SatelliteAccountID
     * @return boolean
     */
    public function copyAccountBranding($SessionID, $SatelliteAccountID)
    {
      return $this->__soapCall('copyAccountBranding', array($SessionID, $SatelliteAccountID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param string $Deadline
     * @return SOAPFileObject
     */
    public function updateProofDeadline($SessionID, $FileID, $Deadline)
    {
      return $this->__soapCall('updateProofDeadline', array($SessionID, $FileID, $Deadline));
    }

    /**
     * @param string $SessionID
     * @param string $Name
     * @param boolean $Disabled
     * @return boolean
     */
    public function createAction($SessionID, $Name, $Disabled)
    {
      return $this->__soapCall('createAction', array($SessionID, $Name, $Disabled));
    }

    /**
     * @param string $SessionID
     * @param int $AccountID
     * @return SOAPDecisionObjectArray
     */
    public function getDecisions($SessionID, $AccountID)
    {
      return $this->__soapCall('getDecisions', array($SessionID, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param int $DecisionId
     * @param string $Name
     * @param boolean $Status
     * @param boolean $Reason
     * @param boolean $PostMessage
     * @param int $AccountID
     * @return SOAPDecisionObject
     */
    public function updateDecision($SessionID, $DecisionId, $Name, $Status, $Reason, $PostMessage, $AccountID)
    {
      return $this->__soapCall('updateDecision', array($SessionID, $DecisionId, $Name, $Status, $Reason, $PostMessage, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param string $Name
     * @param boolean $Text
     * @param int $AccountID
     * @return boolean
     */
    public function createDecisionReason($SessionID, $Name, $Text, $AccountID)
    {
      return $this->__soapCall('createDecisionReason', array($SessionID, $Name, $Text, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param int $AccountID
     * @return SOAPDecisionReasonObjectArray
     */
    public function getDecisionReasons($SessionID, $AccountID)
    {
      return $this->__soapCall('getDecisionReasons', array($SessionID, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param int $WorkspaceID
     * @param string $AccountIDs
     * @param string $UserIDs
     * @param int $Role
     * @return boolean
     */
    public function shareWorkspace($SessionID, $WorkspaceID, $AccountIDs, $UserIDs, $Role)
    {
      return $this->__soapCall('shareWorkspace', array($SessionID, $WorkspaceID, $AccountIDs, $UserIDs, $Role));
    }

    /**
     * @param string $SessionID
     * @param AnyTypeArray $FileIDs
     * @param string $RecipientEmail
     * @param string $RecipientName
     * @param string $RecipientPosition
     * @param string $RecipientDeadline
     * @param string $RecipientRole
     * @param string $RecipientEmailNotifications
     * @param boolean $SuppressNewProofNotification
     * @param string $PrimaryDecisionMaker
     * @return SOAPRecipientObjectArray
     */
    public function addReviewerToProofs($SessionID, AnyTypeArray $FileIDs, $RecipientEmail, $RecipientName, $RecipientPosition, $RecipientDeadline, $RecipientRole, $RecipientEmailNotifications, $SuppressNewProofNotification, $PrimaryDecisionMaker)
    {
      return $this->__soapCall('addReviewerToProofs', array($SessionID, $FileIDs, $RecipientEmail, $RecipientName, $RecipientPosition, $RecipientDeadline, $RecipientRole, $RecipientEmailNotifications, $SuppressNewProofNotification, $PrimaryDecisionMaker));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param string $CallbackURL
     * @param int $CallbackRetryInterval
     * @param boolean $AllVersions
     * @return boolean
     */
    public function requestPDFPrintSummary($SessionID, $FileID, $CallbackURL, $CallbackRetryInterval, $AllVersions)
    {
      return $this->__soapCall('requestPDFPrintSummary', array($SessionID, $FileID, $CallbackURL, $CallbackRetryInterval, $AllVersions));
    }

    /**
     * @param string $SessionID
     * @param int $OwnerID
     * @param string $Hash
     * @param string $Name
     * @param string $SourceName
     * @param string $Subject
     * @param string $Message
     * @param string $Deadline
     * @param string $Recipients
     * @param int $WorkspaceId
     * @param int $BatchID
     * @param boolean $EnableSubscriptions
     * @param boolean $EnableSubscriptionsValidation
     * @param string $DefaultEmailNotifications
     * @param string $DefaultRole
     * @param boolean $AuthorizedOnly
     * @param boolean $EnableAutoLock
     * @param boolean $LockAfterFirstDecision
     * @param boolean $EnableDownload
     * @param boolean $EnableTeamURL
     * @param boolean $EnableEmbedPlayer
     * @param boolean $ShowDashboardLink
     * @param boolean $ShowWorkspaceLink
     * @param boolean $ShowDetailsPageLink
     * @param boolean $ShowVersionsLink
     * @param boolean $ShowHelpLink
     * @param boolean $ShowHelpQuickStartLink
     * @param boolean $ShowHelpUserGuideLink
     * @param boolean $ShowHelpWelcomeScreenLink
     * @param boolean $ShowHelpForumLink
     * @param boolean $ShowHelpBlogLink
     * @param string $CustomLinkUrl
     * @param string $CustomLinkLabel
     * @param boolean $SuppressNewProofNotification
     * @param string $SWF
     * @param boolean $ShowDashboardFunctions
     * @param boolean $ShowCloseIcon
     * @param boolean $ShowPublishToTheWeb
     * @param boolean $ShowPrintComments
     * @param boolean $ShowEmailAlertSettings
     * @param boolean $CombinedProof
     * @param boolean $EnableElectronicSignatures
     * @param boolean $ShowSendDecisionConfirmationCheckbox
     * @param boolean $ClassicProofViewer
     * @param boolean $DisableSubscriptionEmail
     * @param boolean $DisableExcelSummary
     * @param boolean $DisablePdfSummary
     * @param boolean $ShowProofDetails
     * @param boolean $ShowProofWorkflow
     * @param string $ReferenceID
     * @return SOAPFileObjectArray
     */
    public function createProofs($SessionID, $OwnerID, $Hash, $Name, $SourceName, $Subject, $Message, $Deadline, $Recipients, $WorkspaceId, $BatchID, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $LockAfterFirstDecision, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $CombinedProof, $EnableElectronicSignatures, $ShowSendDecisionConfirmationCheckbox, $ClassicProofViewer, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID)
    {
      return $this->__soapCall('createProofs', array($SessionID, $OwnerID, $Hash, $Name, $SourceName, $Subject, $Message, $Deadline, $Recipients, $WorkspaceId, $BatchID, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $LockAfterFirstDecision, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $CombinedProof, $EnableElectronicSignatures, $ShowSendDecisionConfirmationCheckbox, $ClassicProofViewer, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID));
    }

    /**
     * @param string $SessionID
     * @param int $AccountID
     * @param string $Domain
     * @return SOAPAccountObject
     */
    public function setAccountDomain($SessionID, $AccountID, $Domain)
    {
      return $this->__soapCall('setAccountDomain', array($SessionID, $AccountID, $Domain));
    }

    /**
     * @param string $DropzoneURL
     * @param string $UploaderEmail
     * @param int $UploadSize
     * @param int $UploadFilesCount
     * @return boolean
     */
    public function validateDropzoneSubmission($DropzoneURL, $UploaderEmail, $UploadSize, $UploadFilesCount)
    {
      return $this->__soapCall('validateDropzoneSubmission', array($DropzoneURL, $UploaderEmail, $UploadSize, $UploadFilesCount));
    }

    /**
     * @param string $Hash
     * @param string $UploaderEmail
     * @param string $DropzoneURL
     * @param string $SourceName
     * @return SOAPFileObject
     */
    public function createDropzoneProof($Hash, $UploaderEmail, $DropzoneURL, $SourceName)
    {
      return $this->__soapCall('createDropzoneProof', array($Hash, $UploaderEmail, $DropzoneURL, $SourceName));
    }

    /**
     * @param string $SessionID
     * @param string $FileID
     * @return SOAPFileObject
     */
    public function restoreProof($SessionID, $FileID)
    {
      return $this->__soapCall('restoreProof', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param string $WorkspaceID
     * @return SOAPWorkspaceObject
     */
    public function restoreWorkspace($SessionID, $WorkspaceID)
    {
      return $this->__soapCall('restoreWorkspace', array($SessionID, $WorkspaceID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param int $ReviewerID
     * @param string $Subject
     * @param string $Body
     * @return boolean
     */
    public function messageReviewer($SessionID, $FileID, $ReviewerID, $Subject, $Body)
    {
      return $this->__soapCall('messageReviewer', array($SessionID, $FileID, $ReviewerID, $Subject, $Body));
    }

    /**
     * @param string $SessionID
     * @param string $AccountID
     * @return SOAPWorkflowTemplateBasicObjectArray
     */
    public function getWorkflowTemplates($SessionID, $AccountID)
    {
      return $this->__soapCall('getWorkflowTemplates', array($SessionID, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param string $WorkflowTemplateID
     * @return SOAPWorkflowTemplateObject
     */
    public function getWorkflowTemplate($SessionID, $WorkflowTemplateID)
    {
      return $this->__soapCall('getWorkflowTemplate', array($SessionID, $WorkflowTemplateID));
    }

    /**
     * @param string $SessionID
     * @param string $StageID
     * @return SOAPWorkflowStageObject
     */
    public function getWorkflowTemplateStage($SessionID, $StageID)
    {
      return $this->__soapCall('getWorkflowTemplateStage', array($SessionID, $StageID));
    }

    /**
     * @param string $SessionID
     * @param string $RecipientID
     * @return SOAPWorkflowRecipientObject
     */
    public function getWorkflowTemplateStageRecipient($SessionID, $RecipientID)
    {
      return $this->__soapCall('getWorkflowTemplateStageRecipient', array($SessionID, $RecipientID));
    }

    /**
     * @param string $SessionID
     * @param string $Name
     * @param int $AccountID
     * @param int $OwnerID
     * @param SOAPWorkflowStageRequestObjectArray $Stages
     * @param IntArray $SharedUsers
     * @return SOAPWorkflowTemplateObject
     */
    public function createWorkflowTemplate($SessionID, $Name, $AccountID, $OwnerID, SOAPWorkflowStageRequestObjectArray $Stages, IntArray $SharedUsers)
    {
      return $this->__soapCall('createWorkflowTemplate', array($SessionID, $Name, $AccountID, $OwnerID, $Stages, $SharedUsers));
    }

    /**
     * @param string $SessionID
     * @param int $WorkflowTemplateID
     * @param SOAPWorkflowStageRequestObject $Stage
     * @return SOAPWorkflowTemplateObject
     */
    public function addTemplateStage($SessionID, $WorkflowTemplateID, SOAPWorkflowStageRequestObject $Stage)
    {
      return $this->__soapCall('addTemplateStage', array($SessionID, $WorkflowTemplateID, $Stage));
    }

    /**
     * @param string $SessionID
     * @param string $StageID
     * @param SOAPWorkflowRecipientRequestObjectArray $Recipients
     * @return SOAPWorkflowStageObject
     */
    public function addTemplateStageRecipients($SessionID, $StageID, SOAPWorkflowRecipientRequestObjectArray $Recipients)
    {
      return $this->__soapCall('addTemplateStageRecipients', array($SessionID, $StageID, $Recipients));
    }

    /**
     * @param string $SessionID
     * @param string $WorkflowTemplateID
     * @param IntArray $SharedUsers
     * @return SOAPWorkflowTemplateObject
     */
    public function shareWorkflowTemplate($SessionID, $WorkflowTemplateID, IntArray $SharedUsers)
    {
      return $this->__soapCall('shareWorkflowTemplate', array($SessionID, $WorkflowTemplateID, $SharedUsers));
    }

    /**
     * @param string $SessionID
     * @param string $WorkflowTemplateID
     * @param IntArray $SharedUsers
     * @return SOAPWorkflowTemplateObject
     */
    public function unshareWorkflowTemplate($SessionID, $WorkflowTemplateID, IntArray $SharedUsers)
    {
      return $this->__soapCall('unshareWorkflowTemplate', array($SessionID, $WorkflowTemplateID, $SharedUsers));
    }

    /**
     * @param string $SessionID
     * @param string $WorkflowTemplateID
     * @return boolean
     */
    public function deleteWorkflowTemplate($SessionID, $WorkflowTemplateID)
    {
      return $this->__soapCall('deleteWorkflowTemplate', array($SessionID, $WorkflowTemplateID));
    }

    /**
     * @param string $SessionID
     * @param string $WorkflowTemplateID
     * @param string $StageID
     * @return boolean
     */
    public function deleteTemplateStage($SessionID, $WorkflowTemplateID, $StageID)
    {
      return $this->__soapCall('deleteTemplateStage', array($SessionID, $WorkflowTemplateID, $StageID));
    }

    /**
     * @param string $SessionID
     * @param string $WorkflowTemplateID
     * @param IntArray $StageIDs
     * @return boolean
     */
    public function deleteTemplateStages($SessionID, $WorkflowTemplateID, IntArray $StageIDs)
    {
      return $this->__soapCall('deleteTemplateStages', array($SessionID, $WorkflowTemplateID, $StageIDs));
    }

    /**
     * @param string $SessionID
     * @param string $StageID
     * @param string $RecipientID
     * @return boolean
     */
    public function deleteTemplateStageRecipient($SessionID, $StageID, $RecipientID)
    {
      return $this->__soapCall('deleteTemplateStageRecipient', array($SessionID, $StageID, $RecipientID));
    }

    /**
     * @param string $SessionID
     * @param string $StageID
     * @param IntArray $RecipientIDs
     * @return boolean
     */
    public function deleteTemplateStageRecipients($SessionID, $StageID, IntArray $RecipientIDs)
    {
      return $this->__soapCall('deleteTemplateStageRecipients', array($SessionID, $StageID, $RecipientIDs));
    }

    /**
     * @param string $SessionID
     * @param string $WorkflowTemplateID
     * @param string $Name
     * @param int $OwnerID
     * @param IntArray $SharedUsers
     * @return SOAPWorkflowTemplateObject
     */
    public function updateWorkflowTemplate($SessionID, $WorkflowTemplateID, $Name, $OwnerID, IntArray $SharedUsers)
    {
      return $this->__soapCall('updateWorkflowTemplate', array($SessionID, $WorkflowTemplateID, $Name, $OwnerID, $SharedUsers));
    }

    /**
     * @param string $SessionID
     * @param string $WorkflowTemplateID
     * @param SOAPWorkflowStageRequestUpdateObject $Stage
     * @return SOAPWorkflowStageObject
     */
    public function updateTemplateStage($SessionID, $WorkflowTemplateID, SOAPWorkflowStageRequestUpdateObject $Stage)
    {
      return $this->__soapCall('updateTemplateStage', array($SessionID, $WorkflowTemplateID, $Stage));
    }

    /**
     * @param string $SessionID
     * @param string $StageID
     * @param SOAPWorkflowRecipientRequestUpdateObject $Recipient
     * @return SOAPWorkflowRecipientObject
     */
    public function updateTemplateStageRecipient($SessionID, $StageID, SOAPWorkflowRecipientRequestUpdateObject $Recipient)
    {
      return $this->__soapCall('updateTemplateStageRecipient', array($SessionID, $StageID, $Recipient));
    }

    /**
     * @param string $SessionID
     * @param int $OwnerID
     * @param string $Hash
     * @param string $Name
     * @param string $SourceName
     * @param string $Subject
     * @param string $Message
     * @param SOAPWorkflowProofStageRequestObjectArray $Stages
     * @param int $WorkspaceId
     * @param boolean $EnableSubscriptions
     * @param boolean $EnableSubscriptionsValidation
     * @param string $DefaultEmailNotifications
     * @param string $DefaultRole
     * @param boolean $AuthorizedOnly
     * @param boolean $EnableAutoLock
     * @param boolean $EnableDownload
     * @param boolean $EnableTeamURL
     * @param boolean $EnableEmbedPlayer
     * @param boolean $ShowDashboardLink
     * @param boolean $ShowWorkspaceLink
     * @param boolean $ShowDetailsPageLink
     * @param boolean $ShowVersionsLink
     * @param boolean $ShowHelpLink
     * @param boolean $ShowHelpQuickStartLink
     * @param boolean $ShowHelpUserGuideLink
     * @param boolean $ShowHelpWelcomeScreenLink
     * @param boolean $ShowHelpForumLink
     * @param boolean $ShowHelpBlogLink
     * @param string $CustomLinkUrl
     * @param string $CustomLinkLabel
     * @param boolean $SuppressNewProofNotification
     * @param string $SWF
     * @param boolean $ShowDashboardFunctions
     * @param boolean $ShowCloseIcon
     * @param boolean $ShowPublishToTheWeb
     * @param boolean $ShowPrintComments
     * @param boolean $ShowEmailAlertSettings
     * @param boolean $CombinedProof
     * @param boolean $EnableElectronicSignatures
     * @param boolean $DisableSubscriptionEmail
     * @param boolean $DisableExcelSummary
     * @param boolean $DisablePdfSummary
     * @param boolean $ShowProofDetails
     * @param boolean $ShowProofWorkflow
     * @param string $ReferenceID
     * @return SOAPWorkflowProofObjectArray
     */
    public function createWorkflowProof($SessionID, $OwnerID, $Hash, $Name, $SourceName, $Subject, $Message, SOAPWorkflowProofStageRequestObjectArray $Stages, $WorkspaceId, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $CombinedProof, $EnableElectronicSignatures, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID)
    {
      return $this->__soapCall('createWorkflowProof', array($SessionID, $OwnerID, $Hash, $Name, $SourceName, $Subject, $Message, $Stages, $WorkspaceId, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $CombinedProof, $EnableElectronicSignatures, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID));
    }

    /**
     * @param string $SessionID
     * @param int $ParentFileID
     * @param int $OwnerID
     * @param string $Hash
     * @param string $Name
     * @param string $SourceName
     * @param string $Subject
     * @param string $Message
     * @param SOAPWorkflowProofStageRequestObjectArray $Stages
     * @param int $WorkspaceId
     * @param boolean $EnableSubscriptions
     * @param boolean $EnableSubscriptionsValidation
     * @param string $DefaultEmailNotifications
     * @param string $DefaultRole
     * @param boolean $AuthorizedOnly
     * @param boolean $EnableAutoLock
     * @param boolean $EnableDownload
     * @param boolean $EnableTeamURL
     * @param boolean $EnableEmbedPlayer
     * @param boolean $ShowDashboardLink
     * @param boolean $ShowWorkspaceLink
     * @param boolean $ShowDetailsPageLink
     * @param boolean $ShowVersionsLink
     * @param boolean $ShowHelpLink
     * @param boolean $ShowHelpQuickStartLink
     * @param boolean $ShowHelpUserGuideLink
     * @param boolean $ShowHelpWelcomeScreenLink
     * @param boolean $ShowHelpForumLink
     * @param boolean $ShowHelpBlogLink
     * @param string $CustomLinkUrl
     * @param string $CustomLinkLabel
     * @param boolean $SuppressNewProofNotification
     * @param string $SWF
     * @param boolean $ShowDashboardFunctions
     * @param boolean $ShowCloseIcon
     * @param boolean $ShowPublishToTheWeb
     * @param boolean $ShowPrintComments
     * @param boolean $ShowEmailAlertSettings
     * @param boolean $CombinedProof
     * @param boolean $EnableElectronicSignatures
     * @param boolean $DisableSubscriptionEmail
     * @param boolean $DisableExcelSummary
     * @param boolean $DisablePdfSummary
     * @param boolean $ShowProofDetails
     * @param boolean $ShowProofWorkflow
     * @param string $ReferenceID
     * @return SOAPWorkflowProofObjectArray
     */
    public function createWorkflowProofVersion($SessionID, $ParentFileID, $OwnerID, $Hash, $Name, $SourceName, $Subject, $Message, SOAPWorkflowProofStageRequestObjectArray $Stages, $WorkspaceId, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $CombinedProof, $EnableElectronicSignatures, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID)
    {
      return $this->__soapCall('createWorkflowProofVersion', array($SessionID, $ParentFileID, $OwnerID, $Hash, $Name, $SourceName, $Subject, $Message, $Stages, $WorkspaceId, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $CombinedProof, $EnableElectronicSignatures, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param int $OwnerID
     * @param string $Name
     * @param string $Subject
     * @param string $Message
     * @param int $WorkspaceId
     * @param boolean $EnableSubscriptions
     * @param boolean $EnableSubscriptionsValidation
     * @param string $DefaultEmailNotifications
     * @param string $DefaultRole
     * @param boolean $AuthorizedOnly
     * @param boolean $EnableAutoLock
     * @param boolean $EnableDownload
     * @param boolean $EnableTeamURL
     * @param boolean $EnableEmbedPlayer
     * @param boolean $ShowDashboardLink
     * @param boolean $ShowWorkspaceLink
     * @param boolean $ShowDetailsPageLink
     * @param boolean $ShowVersionsLink
     * @param boolean $ShowHelpLink
     * @param boolean $ShowHelpQuickStartLink
     * @param boolean $ShowHelpUserGuideLink
     * @param boolean $ShowHelpWelcomeScreenLink
     * @param boolean $ShowHelpForumLink
     * @param boolean $ShowHelpBlogLink
     * @param string $CustomLinkUrl
     * @param string $CustomLinkLabel
     * @param string $SWF
     * @param boolean $ShowDashboardfunctions
     * @param boolean $ShowCloseIcon
     * @param boolean $ShowPublishToTheWeb
     * @param boolean $ShowPrintComments
     * @param boolean $ShowEmailAlertSettins
     * @param boolean $EnableElectronicSignatures
     * @param boolean $ShowSendDecisionConfirmationCheckbox
     * @param boolean $SuppressNewOwnerNotification
     * @param boolean $DisableSubscriptionEmail
     * @param boolean $ShowProofDetails
     * @param boolean $ShowProofWorkflow
     * @param string $ReferenceID
     * @return SOAPWorkflowProofObject
     */
    public function updateWorkflowProof($SessionID, $FileID, $OwnerID, $Name, $Subject, $Message, $WorkspaceId, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SWF, $ShowDashboardfunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettins, $EnableElectronicSignatures, $ShowSendDecisionConfirmationCheckbox, $SuppressNewOwnerNotification, $DisableSubscriptionEmail, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID)
    {
      return $this->__soapCall('updateWorkflowProof', array($SessionID, $FileID, $OwnerID, $Name, $Subject, $Message, $WorkspaceId, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SWF, $ShowDashboardfunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettins, $EnableElectronicSignatures, $ShowSendDecisionConfirmationCheckbox, $SuppressNewOwnerNotification, $DisableSubscriptionEmail, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param SOAPWorkflowProofStageRequestObject $Stage
     * @return SOAPWorkflowProofStageObject
     */
    public function addWorkflowStage($SessionID, $FileID, SOAPWorkflowProofStageRequestObject $Stage)
    {
      return $this->__soapCall('addWorkflowStage', array($SessionID, $FileID, $Stage));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param SOAPWorkflowProofStageRequestUpdateObject $Stage
     * @return SOAPWorkflowProofStageObject
     */
    public function updateWorkflowProofStage($SessionID, $FileID, SOAPWorkflowProofStageRequestUpdateObject $Stage)
    {
      return $this->__soapCall('updateWorkflowProofStage', array($SessionID, $FileID, $Stage));
    }

    /**
     * @param string $SessionID
     * @param string $ProofName
     * @param int $StartFrom
     * @param int $ItemsPerPage
     * @param boolean $ExactMatch
     * @return SOAPFileObjectArray
     */
    public function searchByProofName($SessionID, $ProofName, $StartFrom, $ItemsPerPage, $ExactMatch)
    {
      return $this->__soapCall('searchByProofName', array($SessionID, $ProofName, $StartFrom, $ItemsPerPage, $ExactMatch));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param int $StageID
     * @return SOAPProofStageObject
     */
    public function getProofStage($SessionID, $FileID, $StageID)
    {
      return $this->__soapCall('getProofStage', array($SessionID, $FileID, $StageID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @return SOAPProofStageObjectArray
     */
    public function getProofStages($SessionID, $FileID)
    {
      return $this->__soapCall('getProofStages', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @return string
     */
    public function getProofJobNumber($SessionID, $FileID)
    {
      return $this->__soapCall('getProofJobNumber', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param int $OwnerID
     * @param string $Hash
     * @param string $Name
     * @param string $SourceName
     * @param int $WorkflowTemplateID
     * @param string $Subject
     * @param string $Message
     * @param int $WorkspaceId
     * @param boolean $EnableSubscriptions
     * @param boolean $EnableSubscriptionsValidation
     * @param string $DefaultEmailNotifications
     * @param string $DefaultRole
     * @param boolean $AuthorizedOnly
     * @param boolean $EnableAutoLock
     * @param boolean $EnableDownload
     * @param boolean $EnableTeamURL
     * @param boolean $EnableEmbedPlayer
     * @param boolean $ShowDashboardLink
     * @param boolean $ShowWorkspaceLink
     * @param boolean $ShowDetailsPageLink
     * @param boolean $ShowVersionsLink
     * @param boolean $ShowHelpLink
     * @param boolean $ShowHelpQuickStartLink
     * @param boolean $ShowHelpUserGuideLink
     * @param boolean $ShowHelpWelcomeScreenLink
     * @param boolean $ShowHelpForumLink
     * @param boolean $ShowHelpBlogLink
     * @param string $CustomLinkUrl
     * @param string $CustomLinkLabel
     * @param boolean $SuppressNewProofNotification
     * @param string $SWF
     * @param boolean $ShowDashboardFunctions
     * @param boolean $ShowCloseIcon
     * @param boolean $ShowPublishToTheWeb
     * @param boolean $ShowPrintComments
     * @param boolean $ShowEmailAlertSettings
     * @param boolean $CombinedProof
     * @param boolean $EnableElectronicSignatures
     * @param boolean $DisableSubscriptionEmail
     * @param boolean $DisableExcelSummary
     * @param boolean $DisablePdfSummary
     * @param boolean $ShowProofDetails
     * @param boolean $ShowProofWorkflow
     * @param string $ReferenceID
     * @return SOAPWorkflowProofObjectArray
     */
    public function createWorkflowTemplateProof($SessionID, $OwnerID, $Hash, $Name, $SourceName, $WorkflowTemplateID, $Subject, $Message, $WorkspaceId, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $CombinedProof, $EnableElectronicSignatures, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID)
    {
      return $this->__soapCall('createWorkflowTemplateProof', array($SessionID, $OwnerID, $Hash, $Name, $SourceName, $WorkflowTemplateID, $Subject, $Message, $WorkspaceId, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $CombinedProof, $EnableElectronicSignatures, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID));
    }

    /**
     * @param string $SessionID
     * @param int $ParentFileID
     * @param int $OwnerID
     * @param string $Hash
     * @param string $Name
     * @param string $SourceName
     * @param int $WorkflowTemplateID
     * @param string $Subject
     * @param string $Message
     * @param int $WorkspaceId
     * @param boolean $EnableSubscriptions
     * @param boolean $EnableSubscriptionsValidation
     * @param string $DefaultEmailNotifications
     * @param string $DefaultRole
     * @param boolean $AuthorizedOnly
     * @param boolean $EnableAutoLock
     * @param boolean $EnableDownload
     * @param boolean $EnableTeamURL
     * @param boolean $EnableEmbedPlayer
     * @param boolean $ShowDashboardLink
     * @param boolean $ShowWorkspaceLink
     * @param boolean $ShowDetailsPageLink
     * @param boolean $ShowVersionsLink
     * @param boolean $ShowHelpLink
     * @param boolean $ShowHelpQuickStartLink
     * @param boolean $ShowHelpUserGuideLink
     * @param boolean $ShowHelpWelcomeScreenLink
     * @param boolean $ShowHelpForumLink
     * @param boolean $ShowHelpBlogLink
     * @param string $CustomLinkUrl
     * @param string $CustomLinkLabel
     * @param boolean $SuppressNewProofNotification
     * @param string $SWF
     * @param boolean $ShowDashboardFunctions
     * @param boolean $ShowCloseIcon
     * @param boolean $ShowPublishToTheWeb
     * @param boolean $ShowPrintComments
     * @param boolean $ShowEmailAlertSettings
     * @param boolean $CombinedProof
     * @param boolean $EnableElectronicSignatures
     * @param boolean $DisableSubscriptionEmail
     * @param boolean $DisableExcelSummary
     * @param boolean $DisablePdfSummary
     * @param boolean $ShowProofDetails
     * @param boolean $ShowProofWorkflow
     * @param string $ReferenceID
     * @return SOAPWorkflowProofObjectArray
     */
    public function createWorkflowTemplateProofVersion($SessionID, $ParentFileID, $OwnerID, $Hash, $Name, $SourceName, $WorkflowTemplateID, $Subject, $Message, $WorkspaceId, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $CombinedProof, $EnableElectronicSignatures, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID)
    {
      return $this->__soapCall('createWorkflowTemplateProofVersion', array($SessionID, $ParentFileID, $OwnerID, $Hash, $Name, $SourceName, $WorkflowTemplateID, $Subject, $Message, $WorkspaceId, $EnableSubscriptions, $EnableSubscriptionsValidation, $DefaultEmailNotifications, $DefaultRole, $AuthorizedOnly, $EnableAutoLock, $EnableDownload, $EnableTeamURL, $EnableEmbedPlayer, $ShowDashboardLink, $ShowWorkspaceLink, $ShowDetailsPageLink, $ShowVersionsLink, $ShowHelpLink, $ShowHelpQuickStartLink, $ShowHelpUserGuideLink, $ShowHelpWelcomeScreenLink, $ShowHelpForumLink, $ShowHelpBlogLink, $CustomLinkUrl, $CustomLinkLabel, $SuppressNewProofNotification, $SWF, $ShowDashboardFunctions, $ShowCloseIcon, $ShowPublishToTheWeb, $ShowPrintComments, $ShowEmailAlertSettings, $CombinedProof, $EnableElectronicSignatures, $DisableSubscriptionEmail, $DisableExcelSummary, $DisablePdfSummary, $ShowProofDetails, $ShowProofWorkflow, $ReferenceID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param int $RecipientID
     * @return string
     */
    public function getProofReviewerOneTimeURL($SessionID, $FileID, $RecipientID)
    {
      return $this->__soapCall('getProofReviewerOneTimeURL', array($SessionID, $FileID, $RecipientID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @return SOAPSectionObjectArray
     */
    public function getProofCustomData($SessionID, $FileID)
    {
      return $this->__soapCall('getProofCustomData', array($SessionID, $FileID));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param SOAPSectionObjectArray $Data
     * @return boolean
     */
    public function setProofCustomData($SessionID, $FileID, SOAPSectionObjectArray $Data)
    {
      return $this->__soapCall('setProofCustomData', array($SessionID, $FileID, $Data));
    }

    /**
     * @param string $SessionID
     * @param int $WorkspaceID
     * @param int $StartFrom
     * @param int $ItemsPerPage
     * @param boolean $IncludeSubfolders
     * @return SOAPFileObjectArray
     */
    public function getProofsByWorkspace($SessionID, $WorkspaceID, $StartFrom, $ItemsPerPage, $IncludeSubfolders)
    {
      return $this->__soapCall('getProofsByWorkspace', array($SessionID, $WorkspaceID, $StartFrom, $ItemsPerPage, $IncludeSubfolders));
    }

    /**
     * @param string $SessionID
     * @param IntArray $WorkspaceIDs
     * @param int $StartFrom
     * @param int $ItemsPerPage
     * @param boolean $IncludeSubfolders
     * @return SOAPFileObjectArray
     */
    public function getProofsByWorkspaces($SessionID, IntArray $WorkspaceIDs, $StartFrom, $ItemsPerPage, $IncludeSubfolders)
    {
      return $this->__soapCall('getProofsByWorkspaces', array($SessionID, $WorkspaceIDs, $StartFrom, $ItemsPerPage, $IncludeSubfolders));
    }

    /**
     * @param string $SessionID
     * @param string $Name
     * @param string $Description
     * @param boolean $Private
     * @param int $AccountID
     * @return SOAPGroupObject
     */
    public function addGroup($SessionID, $Name, $Description, $Private, $AccountID)
    {
      return $this->__soapCall('addGroup', array($SessionID, $Name, $Description, $Private, $AccountID));
    }

    /**
     * @param string $SessionID
     * @param int $GroupID
     * @param string $Name
     * @param string $Description
     * @param boolean $Private
     * @return SOAPGroupObject
     */
    public function updateGroup($SessionID, $GroupID, $Name, $Description, $Private)
    {
      return $this->__soapCall('updateGroup', array($SessionID, $GroupID, $Name, $Description, $Private));
    }

    /**
     * @param string $SessionID
     * @param int $GroupID
     * @return SOAPGroupObject
     */
    public function getGroup($SessionID, $GroupID)
    {
      return $this->__soapCall('getGroup', array($SessionID, $GroupID));
    }

    /**
     * @param string $SessionID
     * @param int $GroupID
     * @param string $Email
     * @param string $DefaultRole
     * @param string $DefaultEmailAlert
     * @return SOAPGroupMemberObject
     */
    public function addGroupMember($SessionID, $GroupID, $Email, $DefaultRole, $DefaultEmailAlert)
    {
      return $this->__soapCall('addGroupMember', array($SessionID, $GroupID, $Email, $DefaultRole, $DefaultEmailAlert));
    }

    /**
     * @param string $SessionID
     * @param int $GroupID
     * @param int $MemberID
     * @param string $DefaultRole
     * @param string $DefaultEmailAlert
     * @return SOAPGroupMemberObject
     */
    public function updateGroupMember($SessionID, $GroupID, $MemberID, $DefaultRole, $DefaultEmailAlert)
    {
      return $this->__soapCall('updateGroupMember', array($SessionID, $GroupID, $MemberID, $DefaultRole, $DefaultEmailAlert));
    }

    /**
     * @param string $SessionID
     * @param int $GroupID
     * @param int $MemberID
     * @return boolean
     */
    public function deleteGroupMember($SessionID, $GroupID, $MemberID)
    {
      return $this->__soapCall('deleteGroupMember', array($SessionID, $GroupID, $MemberID));
    }

    /**
     * @param string $SessionID
     * @param int $GroupID
     * @return boolean
     */
    public function deleteGroup($SessionID, $GroupID)
    {
      return $this->__soapCall('deleteGroup', array($SessionID, $GroupID));
    }

    /**
     * @param string $SessionID
     * @param int $StartFrom
     * @param int $ItemsPerPage
     * @return SOAPGroupObjectArray
     */
    public function getGroups($SessionID, $StartFrom, $ItemsPerPage)
    {
      return $this->__soapCall('getGroups', array($SessionID, $StartFrom, $ItemsPerPage));
    }

    /**
     * @param string $SessionID
     * @param int $FileID
     * @param int $GroupID
     * @param int $StageID
     * @return SOAPRecipientObjectArray
     */
    public function addGroupToProof($SessionID, $FileID, $GroupID, $StageID)
    {
      return $this->__soapCall('addGroupToProof', array($SessionID, $FileID, $GroupID, $StageID));
    }

    /**
     * @param string $SessionID
     * @param string $Form
     * @param string $Hash
     * @return SOAPFileObject
     */
    public function createProofFromJSON($SessionID, $Form, $Hash)
    {
      return $this->__soapCall('createProofFromJSON', array($SessionID, $Form, $Hash));
    }

    /**
     * @param string $SessionID
     * @param string $Form
     * @param string $Hash
     * @return SOAPFileObjectArray
     */
    public function createProofsFromJSON($SessionID, $Form, $Hash)
    {
      return $this->__soapCall('createProofsFromJSON', array($SessionID, $Form, $Hash));
    }

    /**
     * @param string $SessionID
     * @param string $FileID
     * @param string $CallbackURL
     * @param int $CallbackRetryInterval
     * @param boolean $AllVersions
     * @return boolean
     */
    public function requestExcelPrintSummary($SessionID, $FileID, $CallbackURL, $CallbackRetryInterval, $AllVersions)
    {
      return $this->__soapCall('requestExcelPrintSummary', array($SessionID, $FileID, $CallbackURL, $CallbackRetryInterval, $AllVersions));
    }

    /**
     * @param string $SessionID
     * @param string $Email
     * @param int $StartFrom
     * @param int $ItemsPerPage
     * @return SOAPFileObjectArray
     */
    public function getProofsByRecipientEmail($SessionID, $Email, $StartFrom, $ItemsPerPage)
    {
      return $this->__soapCall('getProofsByRecipientEmail', array($SessionID, $Email, $StartFrom, $ItemsPerPage));
    }

    /**
     * @param string $SessionID
     * @param string $LogID
     * @param int $StartFrom
     * @param int $ItemsPerPage
     * @return SOAPActivityLogObjectArray
     */
    public function getActivityLog($SessionID, $LogID, $StartFrom, $ItemsPerPage)
    {
      return $this->__soapCall('getActivityLog', array($SessionID, $LogID, $StartFrom, $ItemsPerPage));
    }

    /**
     * @param string $SessionID
     * @param int $ListViewId
     * @param boolean $IncludeArchived
     * @param int $StartFrom
     * @param int $ItemsPerPage
     * @return SOAPFileObjectArray
     */
    public function getProofsByView($SessionID, $ListViewId, $IncludeArchived, $StartFrom, $ItemsPerPage)
    {
      return $this->__soapCall('getProofsByView', array($SessionID, $ListViewId, $IncludeArchived, $StartFrom, $ItemsPerPage));
    }

}
