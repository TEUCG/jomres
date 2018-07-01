<?php
// This file was auto-generated from sdk-root/src/data/monitoring/2010-08-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2010-08-01', 'endpointPrefix' => 'monitoring', 'protocol' => 'query', 'serviceAbbreviation' => 'CloudWatch', 'serviceFullName' => 'Amazon CloudWatch', 'signatureVersion' => 'v4', 'uid' => 'monitoring-2010-08-01', 'xmlNamespace' => 'http://monitoring.amazonaws.com/doc/2010-08-01/', ], 'operations' => [ 'DeleteAlarms' => [ 'name' => 'DeleteAlarms', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteAlarmsInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFound', ], ], ], 'DeleteDashboards' => [ 'name' => 'DeleteDashboards', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteDashboardsInput', ], 'output' => [ 'shape' => 'DeleteDashboardsOutput', 'resultWrapper' => 'DeleteDashboardsResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'DashboardNotFoundError', ], [ 'shape' => 'InternalServiceFault', ], ], ], 'DescribeAlarmHistory' => [ 'name' => 'DescribeAlarmHistory', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAlarmHistoryInput', ], 'output' => [ 'shape' => 'DescribeAlarmHistoryOutput', 'resultWrapper' => 'DescribeAlarmHistoryResult', ], 'errors' => [ [ 'shape' => 'InvalidNextToken', ], ], ], 'DescribeAlarms' => [ 'name' => 'DescribeAlarms', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAlarmsInput', ], 'output' => [ 'shape' => 'DescribeAlarmsOutput', 'resultWrapper' => 'DescribeAlarmsResult', ], 'errors' => [ [ 'shape' => 'InvalidNextToken', ], ], ], 'DescribeAlarmsForMetric' => [ 'name' => 'DescribeAlarmsForMetric', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAlarmsForMetricInput', ], 'output' => [ 'shape' => 'DescribeAlarmsForMetricOutput', 'resultWrapper' => 'DescribeAlarmsForMetricResult', ], ], 'DisableAlarmActions' => [ 'name' => 'DisableAlarmActions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DisableAlarmActionsInput', ], ], 'EnableAlarmActions' => [ 'name' => 'EnableAlarmActions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'EnableAlarmActionsInput', ], ], 'GetDashboard' => [ 'name' => 'GetDashboard', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetDashboardInput', ], 'output' => [ 'shape' => 'GetDashboardOutput', 'resultWrapper' => 'GetDashboardResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'DashboardNotFoundError', ], [ 'shape' => 'InternalServiceFault', ], ], ], 'GetMetricData' => [ 'name' => 'GetMetricData', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetMetricDataInput', ], 'output' => [ 'shape' => 'GetMetricDataOutput', 'resultWrapper' => 'GetMetricDataResult', ], 'errors' => [ [ 'shape' => 'InvalidNextToken', ], ], ], 'GetMetricStatistics' => [ 'name' => 'GetMetricStatistics', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetMetricStatisticsInput', ], 'output' => [ 'shape' => 'GetMetricStatisticsOutput', 'resultWrapper' => 'GetMetricStatisticsResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'InvalidParameterCombinationException', ], [ 'shape' => 'InternalServiceFault', ], ], ], 'ListDashboards' => [ 'name' => 'ListDashboards', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListDashboardsInput', ], 'output' => [ 'shape' => 'ListDashboardsOutput', 'resultWrapper' => 'ListDashboardsResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'InternalServiceFault', ], ], ], 'ListMetrics' => [ 'name' => 'ListMetrics', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListMetricsInput', ], 'output' => [ 'shape' => 'ListMetricsOutput', 'resultWrapper' => 'ListMetricsResult', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'InvalidParameterValueException', ], ], ], 'PutDashboard' => [ 'name' => 'PutDashboard', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutDashboardInput', ], 'output' => [ 'shape' => 'PutDashboardOutput', 'resultWrapper' => 'PutDashboardResult', ], 'errors' => [ [ 'shape' => 'DashboardInvalidInputError', ], [ 'shape' => 'InternalServiceFault', ], ], ], 'PutMetricAlarm' => [ 'name' => 'PutMetricAlarm', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutMetricAlarmInput', ], 'errors' => [ [ 'shape' => 'LimitExceededFault', ], ], ], 'PutMetricData' => [ 'name' => 'PutMetricData', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutMetricDataInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'InvalidParameterCombinationException', ], [ 'shape' => 'InternalServiceFault', ], ], ], 'SetAlarmState' => [ 'name' => 'SetAlarmState', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SetAlarmStateInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFound', ], [ 'shape' => 'InvalidFormatFault', ], ], ], ], 'shapes' => [ 'ActionPrefix' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'ActionsEnabled' => [ 'type' => 'boolean', ], 'AlarmArn' => [ 'type' => 'string', 'max' => 1600, 'min' => 1, ], 'AlarmDescription' => [ 'type' => 'string', 'max' => 1024, 'min' => 0, ], 'AlarmHistoryItem' => [ 'type' => 'structure', 'members' => [ 'AlarmName' => [ 'shape' => 'AlarmName', ], 'Timestamp' => [ 'shape' => 'Timestamp', ], 'HistoryItemType' => [ 'shape' => 'HistoryItemType', ], 'HistorySummary' => [ 'shape' => 'HistorySummary', ], 'HistoryData' => [ 'shape' => 'HistoryData', ], ], ], 'AlarmHistoryItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'AlarmHistoryItem', ], ], 'AlarmName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'AlarmNamePrefix' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'AlarmNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'AlarmName', ], 'max' => 100, ], 'AwsQueryErrorMessage' => [ 'type' => 'string', ], 'ComparisonOperator' => [ 'type' => 'string', 'enum' => [ 'GreaterThanOrEqualToThreshold', 'GreaterThanThreshold', 'LessThanThreshold', 'LessThanOrEqualToThreshold', ], ], 'DashboardArn' => [ 'type' => 'string', ], 'DashboardBody' => [ 'type' => 'string', ], 'DashboardEntries' => [ 'type' => 'list', 'member' => [ 'shape' => 'DashboardEntry', ], ], 'DashboardEntry' => [ 'type' => 'structure', 'members' => [ 'DashboardName' => [ 'shape' => 'DashboardName', ], 'DashboardArn' => [ 'shape' => 'DashboardArn', ], 'LastModified' => [ 'shape' => 'LastModified', ], 'Size' => [ 'shape' => 'Size', ], ], ], 'DashboardErrorMessage' => [ 'type' => 'string', ], 'DashboardInvalidInputError' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'DashboardErrorMessage', ], 'dashboardValidationMessages' => [ 'shape' => 'DashboardValidationMessages', ], ], 'error' => [ 'code' => 'InvalidParameterInput', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'DashboardName' => [ 'type' => 'string', ], 'DashboardNamePrefix' => [ 'type' => 'string', ], 'DashboardNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'DashboardName', ], ], 'DashboardNotFoundError' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'DashboardErrorMessage', ], ], 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'DashboardValidationMessage' => [ 'type' => 'structure', 'members' => [ 'DataPath' => [ 'shape' => 'DataPath', ], 'Message' => [ 'shape' => 'Message', ], ], ], 'DashboardValidationMessages' => [ 'type' => 'list', 'member' => [ 'shape' => 'DashboardValidationMessage', ], ], 'DataPath' => [ 'type' => 'string', ], 'Datapoint' => [ 'type' => 'structure', 'members' => [ 'Timestamp' => [ 'shape' => 'Timestamp', ], 'SampleCount' => [ 'shape' => 'DatapointValue', ], 'Average' => [ 'shape' => 'DatapointValue', ], 'Sum' => [ 'shape' => 'DatapointValue', ], 'Minimum' => [ 'shape' => 'DatapointValue', ], 'Maximum' => [ 'shape' => 'DatapointValue', ], 'Unit' => [ 'shape' => 'StandardUnit', ], 'ExtendedStatistics' => [ 'shape' => 'DatapointValueMap', ], ], 'xmlOrder' => [ 'Timestamp', 'SampleCount', 'Average', 'Sum', 'Minimum', 'Maximum', 'Unit', 'ExtendedStatistics', ], ], 'DatapointValue' => [ 'type' => 'double', ], 'DatapointValueMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'ExtendedStatistic', ], 'value' => [ 'shape' => 'DatapointValue', ], ], 'DatapointValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatapointValue', ], ], 'Datapoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'Datapoint', ], ], 'DatapointsToAlarm' => [ 'type' => 'integer', 'min' => 1, ], 'DeleteAlarmsInput' => [ 'type' => 'structure', 'required' => [ 'AlarmNames', ], 'members' => [ 'AlarmNames' => [ 'shape' => 'AlarmNames', ], ], ], 'DeleteDashboardsInput' => [ 'type' => 'structure', 'required' => [ 'DashboardNames', ], 'members' => [ 'DashboardNames' => [ 'shape' => 'DashboardNames', ], ], ], 'DeleteDashboardsOutput' => [ 'type' => 'structure', 'members' => [], ], 'DescribeAlarmHistoryInput' => [ 'type' => 'structure', 'members' => [ 'AlarmName' => [ 'shape' => 'AlarmName', ], 'HistoryItemType' => [ 'shape' => 'HistoryItemType', ], 'StartDate' => [ 'shape' => 'Timestamp', ], 'EndDate' => [ 'shape' => 'Timestamp', ], 'MaxRecords' => [ 'shape' => 'MaxRecords', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeAlarmHistoryOutput' => [ 'type' => 'structure', 'members' => [ 'AlarmHistoryItems' => [ 'shape' => 'AlarmHistoryItems', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeAlarmsForMetricInput' => [ 'type' => 'structure', 'required' => [ 'MetricName', 'Namespace', ], 'members' => [ 'MetricName' => [ 'shape' => 'MetricName', ], 'Namespace' => [ 'shape' => 'Namespace', ], 'Statistic' => [ 'shape' => 'Statistic', ], 'ExtendedStatistic' => [ 'shape' => 'ExtendedStatistic', ], 'Dimensions' => [ 'shape' => 'Dimensions', ], 'Period' => [ 'shape' => 'Period', ], 'Unit' => [ 'shape' => 'StandardUnit', ], ], ], 'DescribeAlarmsForMetricOutput' => [ 'type' => 'structure', 'members' => [ 'MetricAlarms' => [ 'shape' => 'MetricAlarms', ], ], ], 'DescribeAlarmsInput' => [ 'type' => 'structure', 'members' => [ 'AlarmNames' => [ 'shape' => 'AlarmNames', ], 'AlarmNamePrefix' => [ 'shape' => 'AlarmNamePrefix', ], 'StateValue' => [ 'shape' => 'StateValue', ], 'ActionPrefix' => [ 'shape' => 'ActionPrefix', ], 'MaxRecords' => [ 'shape' => 'MaxRecords', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeAlarmsOutput' => [ 'type' => 'structure', 'members' => [ 'MetricAlarms' => [ 'shape' => 'MetricAlarms', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'Dimension' => [ 'type' => 'structure', 'required' => [ 'Name', 'Value', ], 'members' => [ 'Name' => [ 'shape' => 'DimensionName', ], 'Value' => [ 'shape' => 'DimensionValue', ], ], 'xmlOrder' => [ 'Name', 'Value', ], ], 'DimensionFilter' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'DimensionName', ], 'Value' => [ 'shape' => 'DimensionValue', ], ], ], 'DimensionFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionFilter', ], 'max' => 10, ], 'DimensionName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'DimensionValue' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'Dimensions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Dimension', ], 'max' => 10, ], 'DisableAlarmActionsInput' => [ 'type' => 'structure', 'required' => [ 'AlarmNames', ], 'members' => [ 'AlarmNames' => [ 'shape' => 'AlarmNames', ], ], ], 'EnableAlarmActionsInput' => [ 'type' => 'structure', 'required' => [ 'AlarmNames', ], 'members' => [ 'AlarmNames' => [ 'shape' => 'AlarmNames', ], ], ], 'ErrorMessage' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'EvaluateLowSampleCountPercentile' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'EvaluationPeriods' => [ 'type' => 'integer', 'min' => 1, ], 'ExtendedStatistic' => [ 'type' => 'string', 'pattern' => 'p(\\d{1,2}(\\.\\d{0,2})?|100)', ], 'ExtendedStatistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExtendedStatistic', ], 'max' => 10, 'min' => 1, ], 'FaultDescription' => [ 'type' => 'string', ], 'GetDashboardInput' => [ 'type' => 'structure', 'required' => [ 'DashboardName', ], 'members' => [ 'DashboardName' => [ 'shape' => 'DashboardName', ], ], ], 'GetDashboardOutput' => [ 'type' => 'structure', 'members' => [ 'DashboardArn' => [ 'shape' => 'DashboardArn', ], 'DashboardBody' => [ 'shape' => 'DashboardBody', ], 'DashboardName' => [ 'shape' => 'DashboardName', ], ], ], 'GetMetricDataInput' => [ 'type' => 'structure', 'required' => [ 'MetricDataQueries', 'StartTime', 'EndTime', ], 'members' => [ 'MetricDataQueries' => [ 'shape' => 'MetricDataQueries', ], 'StartTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'ScanBy' => [ 'shape' => 'ScanBy', ], 'MaxDatapoints' => [ 'shape' => 'GetMetricDataMaxDatapoints', ], ], ], 'GetMetricDataMaxDatapoints' => [ 'type' => 'integer', ], 'GetMetricDataOutput' => [ 'type' => 'structure', 'members' => [ 'MetricDataResults' => [ 'shape' => 'MetricDataResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'GetMetricStatisticsInput' => [ 'type' => 'structure', 'required' => [ 'Namespace', 'MetricName', 'StartTime', 'EndTime', 'Period', ], 'members' => [ 'Namespace' => [ 'shape' => 'Namespace', ], 'MetricName' => [ 'shape' => 'MetricName', ], 'Dimensions' => [ 'shape' => 'Dimensions', ], 'StartTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'Period' => [ 'shape' => 'Period', ], 'Statistics' => [ 'shape' => 'Statistics', ], 'ExtendedStatistics' => [ 'shape' => 'ExtendedStatistics', ], 'Unit' => [ 'shape' => 'StandardUnit', ], ], ], 'GetMetricStatisticsOutput' => [ 'type' => 'structure', 'members' => [ 'Label' => [ 'shape' => 'MetricLabel', ], 'Datapoints' => [ 'shape' => 'Datapoints', ], ], ], 'HistoryData' => [ 'type' => 'string', 'max' => 4095, 'min' => 1, ], 'HistoryItemType' => [ 'type' => 'string', 'enum' => [ 'ConfigurationUpdate', 'StateUpdate', 'Action', ], ], 'HistorySummary' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'InternalServiceFault' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'FaultDescription', ], ], 'error' => [ 'code' => 'InternalServiceError', 'httpStatusCode' => 500, ], 'exception' => true, 'xmlOrder' => [ 'Message', ], ], 'InvalidFormatFault' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'code' => 'InvalidFormat', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidNextToken' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'code' => 'InvalidNextToken', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidParameterCombinationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'AwsQueryErrorMessage', ], ], 'error' => [ 'code' => 'InvalidParameterCombination', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidParameterValueException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'AwsQueryErrorMessage', ], ], 'error' => [ 'code' => 'InvalidParameterValue', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'LastModified' => [ 'type' => 'timestamp', ], 'LimitExceededFault' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'code' => 'LimitExceeded', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ListDashboardsInput' => [ 'type' => 'structure', 'members' => [ 'DashboardNamePrefix' => [ 'shape' => 'DashboardNamePrefix', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListDashboardsOutput' => [ 'type' => 'structure', 'members' => [ 'DashboardEntries' => [ 'shape' => 'DashboardEntries', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListMetricsInput' => [ 'type' => 'structure', 'members' => [ 'Namespace' => [ 'shape' => 'Namespace', ], 'MetricName' => [ 'shape' => 'MetricName', ], 'Dimensions' => [ 'shape' => 'DimensionFilters', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListMetricsOutput' => [ 'type' => 'structure', 'members' => [ 'Metrics' => [ 'shape' => 'Metrics', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], 'xmlOrder' => [ 'Metrics', 'NextToken', ], ], 'MaxRecords' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'Message' => [ 'type' => 'string', ], 'MessageData' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => 'MessageDataCode', ], 'Value' => [ 'shape' => 'MessageDataValue', ], ], ], 'MessageDataCode' => [ 'type' => 'string', ], 'MessageDataValue' => [ 'type' => 'string', ], 'Metric' => [ 'type' => 'structure', 'members' => [ 'Namespace' => [ 'shape' => 'Namespace', ], 'MetricName' => [ 'shape' => 'MetricName', ], 'Dimensions' => [ 'shape' => 'Dimensions', ], ], 'xmlOrder' => [ 'Namespace', 'MetricName', 'Dimensions', ], ], 'MetricAlarm' => [ 'type' => 'structure', 'members' => [ 'AlarmName' => [ 'shape' => 'AlarmName', ], 'AlarmArn' => [ 'shape' => 'AlarmArn', ], 'AlarmDescription' => [ 'shape' => 'AlarmDescription', ], 'AlarmConfigurationUpdatedTimestamp' => [ 'shape' => 'Timestamp', ], 'ActionsEnabled' => [ 'shape' => 'ActionsEnabled', ], 'OKActions' => [ 'shape' => 'ResourceList', ], 'AlarmActions' => [ 'shape' => 'ResourceList', ], 'InsufficientDataActions' => [ 'shape' => 'ResourceList', ], 'StateValue' => [ 'shape' => 'StateValue', ], 'StateReason' => [ 'shape' => 'StateReason', ], 'StateReasonData' => [ 'shape' => 'StateReasonData', ], 'StateUpdatedTimestamp' => [ 'shape' => 'Timestamp', ], 'MetricName' => [ 'shape' => 'MetricName', ], 'Namespace' => [ 'shape' => 'Namespace', ], 'Statistic' => [ 'shape' => 'Statistic', ], 'ExtendedStatistic' => [ 'shape' => 'ExtendedStatistic', ], 'Dimensions' => [ 'shape' => 'Dimensions', ], 'Period' => [ 'shape' => 'Period', ], 'Unit' => [ 'shape' => 'StandardUnit', ], 'EvaluationPeriods' => [ 'shape' => 'EvaluationPeriods', ], 'DatapointsToAlarm' => [ 'shape' => 'DatapointsToAlarm', ], 'Threshold' => [ 'shape' => 'Threshold', ], 'ComparisonOperator' => [ 'shape' => 'ComparisonOperator', ], 'TreatMissingData' => [ 'shape' => 'TreatMissingData', ], 'EvaluateLowSampleCountPercentile' => [ 'shape' => 'EvaluateLowSampleCountPercentile', ], ], 'xmlOrder' => [ 'AlarmName', 'AlarmArn', 'AlarmDescription', 'AlarmConfigurationUpdatedTimestamp', 'ActionsEnabled', 'OKActions', 'AlarmActions', 'InsufficientDataActions', 'StateValue', 'StateReason', 'StateReasonData', 'StateUpdatedTimestamp', 'MetricName', 'Namespace', 'Statistic', 'Dimensions', 'Period', 'Unit', 'EvaluationPeriods', 'Threshold', 'ComparisonOperator', 'ExtendedStatistic', 'TreatMissingData', 'EvaluateLowSampleCountPercentile', 'DatapointsToAlarm', ], ], 'MetricAlarms' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricAlarm', ], ], 'MetricData' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDatum', ], ], 'MetricDataQueries' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDataQuery', ], ], 'MetricDataQuery' => [ 'type' => 'structure', 'required' => [ 'Id', ], 'members' => [ 'Id' => [ 'shape' => 'MetricId', ], 'MetricStat' => [ 'shape' => 'MetricStat', ], 'Expression' => [ 'shape' => 'MetricExpression', ], 'Label' => [ 'shape' => 'MetricLabel', ], 'ReturnData' => [ 'shape' => 'ReturnData', ], ], ], 'MetricDataResult' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'MetricId', ], 'Label' => [ 'shape' => 'MetricLabel', ], 'Timestamps' => [ 'shape' => 'Timestamps', ], 'Values' => [ 'shape' => 'DatapointValues', ], 'StatusCode' => [ 'shape' => 'StatusCode', ], 'Messages' => [ 'shape' => 'MetricDataResultMessages', ], ], ], 'MetricDataResultMessages' => [ 'type' => 'list', 'member' => [ 'shape' => 'MessageData', ], ], 'MetricDataResults' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDataResult', ], ], 'MetricDatum' => [ 'type' => 'structure', 'required' => [ 'MetricName', ], 'members' => [ 'MetricName' => [ 'shape' => 'MetricName', ], 'Dimensions' => [ 'shape' => 'Dimensions', ], 'Timestamp' => [ 'shape' => 'Timestamp', ], 'Value' => [ 'shape' => 'DatapointValue', ], 'StatisticValues' => [ 'shape' => 'StatisticSet', ], 'Unit' => [ 'shape' => 'StandardUnit', ], 'StorageResolution' => [ 'shape' => 'StorageResolution', ], ], ], 'MetricExpression' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'MetricId' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'MetricLabel' => [ 'type' => 'string', ], 'MetricName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'MetricStat' => [ 'type' => 'structure', 'required' => [ 'Metric', 'Period', 'Stat', ], 'members' => [ 'Metric' => [ 'shape' => 'Metric', ], 'Period' => [ 'shape' => 'Period', ], 'Stat' => [ 'shape' => 'Stat', ], 'Unit' => [ 'shape' => 'StandardUnit', ], ], ], 'Metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metric', ], ], 'MissingRequiredParameterException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'AwsQueryErrorMessage', ], ], 'error' => [ 'code' => 'MissingParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'Namespace' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '[^:].*', ], 'NextToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 0, ], 'Period' => [ 'type' => 'integer', 'min' => 1, ], 'PutDashboardInput' => [ 'type' => 'structure', 'required' => [ 'DashboardName', 'DashboardBody', ], 'members' => [ 'DashboardName' => [ 'shape' => 'DashboardName', ], 'DashboardBody' => [ 'shape' => 'DashboardBody', ], ], ], 'PutDashboardOutput' => [ 'type' => 'structure', 'members' => [ 'DashboardValidationMessages' => [ 'shape' => 'DashboardValidationMessages', ], ], ], 'PutMetricAlarmInput' => [ 'type' => 'structure', 'required' => [ 'AlarmName', 'MetricName', 'Namespace', 'Period', 'EvaluationPeriods', 'Threshold', 'ComparisonOperator', ], 'members' => [ 'AlarmName' => [ 'shape' => 'AlarmName', ], 'AlarmDescription' => [ 'shape' => 'AlarmDescription', ], 'ActionsEnabled' => [ 'shape' => 'ActionsEnabled', ], 'OKActions' => [ 'shape' => 'ResourceList', ], 'AlarmActions' => [ 'shape' => 'ResourceList', ], 'InsufficientDataActions' => [ 'shape' => 'ResourceList', ], 'MetricName' => [ 'shape' => 'MetricName', ], 'Namespace' => [ 'shape' => 'Namespace', ], 'Statistic' => [ 'shape' => 'Statistic', ], 'ExtendedStatistic' => [ 'shape' => 'ExtendedStatistic', ], 'Dimensions' => [ 'shape' => 'Dimensions', ], 'Period' => [ 'shape' => 'Period', ], 'Unit' => [ 'shape' => 'StandardUnit', ], 'EvaluationPeriods' => [ 'shape' => 'EvaluationPeriods', ], 'DatapointsToAlarm' => [ 'shape' => 'DatapointsToAlarm', ], 'Threshold' => [ 'shape' => 'Threshold', ], 'ComparisonOperator' => [ 'shape' => 'ComparisonOperator', ], 'TreatMissingData' => [ 'shape' => 'TreatMissingData', ], 'EvaluateLowSampleCountPercentile' => [ 'shape' => 'EvaluateLowSampleCountPercentile', ], ], ], 'PutMetricDataInput' => [ 'type' => 'structure', 'required' => [ 'Namespace', 'MetricData', ], 'members' => [ 'Namespace' => [ 'shape' => 'Namespace', ], 'MetricData' => [ 'shape' => 'MetricData', ], ], ], 'ResourceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceName', ], 'max' => 5, ], 'ResourceName' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'ResourceNotFound' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ReturnData' => [ 'type' => 'boolean', ], 'ScanBy' => [ 'type' => 'string', 'enum' => [ 'TimestampDescending', 'TimestampAscending', ], ], 'SetAlarmStateInput' => [ 'type' => 'structure', 'required' => [ 'AlarmName', 'StateValue', 'StateReason', ], 'members' => [ 'AlarmName' => [ 'shape' => 'AlarmName', ], 'StateValue' => [ 'shape' => 'StateValue', ], 'StateReason' => [ 'shape' => 'StateReason', ], 'StateReasonData' => [ 'shape' => 'StateReasonData', ], ], ], 'Size' => [ 'type' => 'long', ], 'StandardUnit' => [ 'type' => 'string', 'enum' => [ 'Seconds', 'Microseconds', 'Milliseconds', 'Bytes', 'Kilobytes', 'Megabytes', 'Gigabytes', 'Terabytes', 'Bits', 'Kilobits', 'Megabits', 'Gigabits', 'Terabits', 'Percent', 'Count', 'Bytes/Second', 'Kilobytes/Second', 'Megabytes/Second', 'Gigabytes/Second', 'Terabytes/Second', 'Bits/Second', 'Kilobits/Second', 'Megabits/Second', 'Gigabits/Second', 'Terabits/Second', 'Count/Second', 'None', ], ], 'Stat' => [ 'type' => 'string', ], 'StateReason' => [ 'type' => 'string', 'max' => 1023, 'min' => 0, ], 'StateReasonData' => [ 'type' => 'string', 'max' => 4000, 'min' => 0, ], 'StateValue' => [ 'type' => 'string', 'enum' => [ 'OK', 'ALARM', 'INSUFFICIENT_DATA', ], ], 'Statistic' => [ 'type' => 'string', 'enum' => [ 'SampleCount', 'Average', 'Sum', 'Minimum', 'Maximum', ], ], 'StatisticSet' => [ 'type' => 'structure', 'required' => [ 'SampleCount', 'Sum', 'Minimum', 'Maximum', ], 'members' => [ 'SampleCount' => [ 'shape' => 'DatapointValue', ], 'Sum' => [ 'shape' => 'DatapointValue', ], 'Minimum' => [ 'shape' => 'DatapointValue', ], 'Maximum' => [ 'shape' => 'DatapointValue', ], ], ], 'Statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'Statistic', ], 'max' => 5, 'min' => 1, ], 'StatusCode' => [ 'type' => 'string', 'enum' => [ 'Complete', 'InternalError', 'PartialData', ], ], 'StorageResolution' => [ 'type' => 'integer', 'min' => 1, ], 'Threshold' => [ 'type' => 'double', ], 'Timestamp' => [ 'type' => 'timestamp', ], 'Timestamps' => [ 'type' => 'list', 'member' => [ 'shape' => 'Timestamp', ], ], 'TreatMissingData' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], ],];
