<?php
namespace Aws\Inspector;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Inspector** service.
 *
 * @method \Aws\Result addAttributesToFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addAttributesToFindingsAsync(array $args = [])
 * @method \Aws\Result createAssessmentTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssessmentTargetAsync(array $args = [])
 * @method \Aws\Result createAssessmentTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssessmentTemplateAsync(array $args = [])
 * @method \Aws\Result createResourceGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceGroupAsync(array $args = [])
 * @method \Aws\Result deleteAssessmentRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssessmentRunAsync(array $args = [])
 * @method \Aws\Result deleteAssessmentTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssessmentTargetAsync(array $args = [])
 * @method \Aws\Result deleteAssessmentTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssessmentTemplateAsync(array $args = [])
 * @method \Aws\Result describeAssessmentRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssessmentRunsAsync(array $args = [])
 * @method \Aws\Result describeAssessmentTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssessmentTargetsAsync(array $args = [])
 * @method \Aws\Result describeAssessmentTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssessmentTemplatesAsync(array $args = [])
 * @method \Aws\Result describeCrossAccountAccessRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCrossAccountAccessRoleAsync(array $args = [])
 * @method \Aws\Result describeFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFindingsAsync(array $args = [])
 * @method \Aws\Result describeResourceGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourceGroupsAsync(array $args = [])
 * @method \Aws\Result describeRulesPackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRulesPackagesAsync(array $args = [])
 * @method \Aws\Result getAssessmentReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssessmentReportAsync(array $args = [])
 * @method \Aws\Result getTelemetryMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTelemetryMetadataAsync(array $args = [])
 * @method \Aws\Result listAssessmentRunAgents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssessmentRunAgentsAsync(array $args = [])
 * @method \Aws\Result listAssessmentRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssessmentRunsAsync(array $args = [])
 * @method \Aws\Result listAssessmentTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssessmentTargetsAsync(array $args = [])
 * @method \Aws\Result listAssessmentTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssessmentTemplatesAsync(array $args = [])
 * @method \Aws\Result listEventSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventSubscriptionsAsync(array $args = [])
 * @method \Aws\Result listFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFindingsAsync(array $args = [])
 * @method \Aws\Result listRulesPackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRulesPackagesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result previewAgents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise previewAgentsAsync(array $args = [])
 * @method \Aws\Result registerCrossAccountAccessRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerCrossAccountAccessRoleAsync(array $args = [])
 * @method \Aws\Result removeAttributesFromFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeAttributesFromFindingsAsync(array $args = [])
 * @method \Aws\Result setTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setTagsForResourceAsync(array $args = [])
 * @method \Aws\Result startAssessmentRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startAssessmentRunAsync(array $args = [])
 * @method \Aws\Result stopAssessmentRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopAssessmentRunAsync(array $args = [])
 * @method \Aws\Result subscribeToEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise subscribeToEventAsync(array $args = [])
 * @method \Aws\Result unsubscribeFromEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unsubscribeFromEventAsync(array $args = [])
 * @method \Aws\Result updateAssessmentTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssessmentTargetAsync(array $args = [])
 */
class InspectorClient extends AwsClient {}
