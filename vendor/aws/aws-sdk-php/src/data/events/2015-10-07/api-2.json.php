<?php
// This file was auto-generated from sdk-root/src/data/events/2015-10-07/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2015-10-07', 'endpointPrefix' => 'events', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Amazon CloudWatch Events', 'serviceId' => 'CloudWatch Events', 'signatureVersion' => 'v4', 'targetPrefix' => 'AWSEvents', 'uid' => 'events-2015-10-07', ], 'operations' => [ 'DeleteRule' => [ 'name' => 'DeleteRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteRuleRequest', ], 'errors' => [ [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'InternalException', ], ], ], 'DescribeEventBus' => [ 'name' => 'DescribeEventBus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeEventBusRequest', ], 'output' => [ 'shape' => 'DescribeEventBusResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalException', ], ], ], 'DescribeRule' => [ 'name' => 'DescribeRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeRuleRequest', ], 'output' => [ 'shape' => 'DescribeRuleResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalException', ], ], ], 'DisableRule' => [ 'name' => 'DisableRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DisableRuleRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'InternalException', ], ], ], 'EnableRule' => [ 'name' => 'EnableRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'EnableRuleRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'InternalException', ], ], ], 'ListRuleNamesByTarget' => [ 'name' => 'ListRuleNamesByTarget', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListRuleNamesByTargetRequest', ], 'output' => [ 'shape' => 'ListRuleNamesByTargetResponse', ], 'errors' => [ [ 'shape' => 'InternalException', ], ], ], 'ListRules' => [ 'name' => 'ListRules', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListRulesRequest', ], 'output' => [ 'shape' => 'ListRulesResponse', ], 'errors' => [ [ 'shape' => 'InternalException', ], ], ], 'ListTargetsByRule' => [ 'name' => 'ListTargetsByRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTargetsByRuleRequest', ], 'output' => [ 'shape' => 'ListTargetsByRuleResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalException', ], ], ], 'PutEvents' => [ 'name' => 'PutEvents', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutEventsRequest', ], 'output' => [ 'shape' => 'PutEventsResponse', ], 'errors' => [ [ 'shape' => 'InternalException', ], ], ], 'PutPermission' => [ 'name' => 'PutPermission', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutPermissionRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'PolicyLengthExceededException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ConcurrentModificationException', ], ], ], 'PutRule' => [ 'name' => 'PutRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutRuleRequest', ], 'output' => [ 'shape' => 'PutRuleResponse', ], 'errors' => [ [ 'shape' => 'InvalidEventPatternException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'InternalException', ], ], ], 'PutTargets' => [ 'name' => 'PutTargets', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutTargetsRequest', ], 'output' => [ 'shape' => 'PutTargetsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalException', ], ], ], 'RemovePermission' => [ 'name' => 'RemovePermission', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RemovePermissionRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ConcurrentModificationException', ], ], ], 'RemoveTargets' => [ 'name' => 'RemoveTargets', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RemoveTargetsRequest', ], 'output' => [ 'shape' => 'RemoveTargetsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'InternalException', ], ], ], 'TestEventPattern' => [ 'name' => 'TestEventPattern', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TestEventPatternRequest', ], 'output' => [ 'shape' => 'TestEventPatternResponse', ], 'errors' => [ [ 'shape' => 'InvalidEventPatternException', ], [ 'shape' => 'InternalException', ], ], ], ], 'shapes' => [ 'Action' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => 'events:[a-zA-Z]+', ], 'Arn' => [ 'type' => 'string', 'max' => 1600, 'min' => 1, ], 'BatchArrayProperties' => [ 'type' => 'structure', 'members' => [ 'Size' => [ 'shape' => 'Integer', ], ], ], 'BatchParameters' => [ 'type' => 'structure', 'required' => [ 'JobDefinition', 'JobName', ], 'members' => [ 'JobDefinition' => [ 'shape' => 'String', ], 'JobName' => [ 'shape' => 'String', ], 'ArrayProperties' => [ 'shape' => 'BatchArrayProperties', ], 'RetryStrategy' => [ 'shape' => 'BatchRetryStrategy', ], ], ], 'BatchRetryStrategy' => [ 'type' => 'structure', 'members' => [ 'Attempts' => [ 'shape' => 'Integer', ], ], ], 'Boolean' => [ 'type' => 'boolean', ], 'ConcurrentModificationException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'DeleteRuleRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'RuleName', ], ], ], 'DescribeEventBusRequest' => [ 'type' => 'structure', 'members' => [], ], 'DescribeEventBusResponse' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Arn' => [ 'shape' => 'String', ], 'Policy' => [ 'shape' => 'String', ], ], ], 'DescribeRuleRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'RuleName', ], ], ], 'DescribeRuleResponse' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'RuleName', ], 'Arn' => [ 'shape' => 'RuleArn', ], 'EventPattern' => [ 'shape' => 'EventPattern', ], 'ScheduleExpression' => [ 'shape' => 'ScheduleExpression', ], 'State' => [ 'shape' => 'RuleState', ], 'Description' => [ 'shape' => 'RuleDescription', ], 'RoleArn' => [ 'shape' => 'RoleArn', ], ], ], 'DisableRuleRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'RuleName', ], ], ], 'EcsParameters' => [ 'type' => 'structure', 'required' => [ 'TaskDefinitionArn', ], 'members' => [ 'TaskDefinitionArn' => [ 'shape' => 'Arn', ], 'TaskCount' => [ 'shape' => 'LimitMin1', ], ], ], 'EnableRuleRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'RuleName', ], ], ], 'ErrorCode' => [ 'type' => 'string', ], 'ErrorMessage' => [ 'type' => 'string', ], 'EventId' => [ 'type' => 'string', ], 'EventPattern' => [ 'type' => 'string', ], 'EventResource' => [ 'type' => 'string', ], 'EventResourceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventResource', ], ], 'EventTime' => [ 'type' => 'timestamp', ], 'InputTransformer' => [ 'type' => 'structure', 'required' => [ 'InputTemplate', ], 'members' => [ 'InputPathsMap' => [ 'shape' => 'TransformerPaths', ], 'InputTemplate' => [ 'shape' => 'TransformerInput', ], ], ], 'InputTransformerPathKey' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '[A-Za-z0-9\\_\\-]+', ], 'Integer' => [ 'type' => 'integer', ], 'InternalException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, 'fault' => true, ], 'InvalidEventPatternException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'KinesisParameters' => [ 'type' => 'structure', 'required' => [ 'PartitionKeyPath', ], 'members' => [ 'PartitionKeyPath' => [ 'shape' => 'TargetPartitionKeyPath', ], ], ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'LimitMax100' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'LimitMin1' => [ 'type' => 'integer', 'min' => 1, ], 'ListRuleNamesByTargetRequest' => [ 'type' => 'structure', 'required' => [ 'TargetArn', ], 'members' => [ 'TargetArn' => [ 'shape' => 'TargetArn', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Limit' => [ 'shape' => 'LimitMax100', ], ], ], 'ListRuleNamesByTargetResponse' => [ 'type' => 'structure', 'members' => [ 'RuleNames' => [ 'shape' => 'RuleNameList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListRulesRequest' => [ 'type' => 'structure', 'members' => [ 'NamePrefix' => [ 'shape' => 'RuleName', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Limit' => [ 'shape' => 'LimitMax100', ], ], ], 'ListRulesResponse' => [ 'type' => 'structure', 'members' => [ 'Rules' => [ 'shape' => 'RuleResponseList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTargetsByRuleRequest' => [ 'type' => 'structure', 'required' => [ 'Rule', ], 'members' => [ 'Rule' => [ 'shape' => 'RuleName', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Limit' => [ 'shape' => 'LimitMax100', ], ], ], 'ListTargetsByRuleResponse' => [ 'type' => 'structure', 'members' => [ 'Targets' => [ 'shape' => 'TargetList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'MessageGroupId' => [ 'type' => 'string', ], 'NextToken' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'PolicyLengthExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'Principal' => [ 'type' => 'string', 'max' => 12, 'min' => 1, 'pattern' => '(\\d{12}|\\*)', ], 'PutEventsRequest' => [ 'type' => 'structure', 'required' => [ 'Entries', ], 'members' => [ 'Entries' => [ 'shape' => 'PutEventsRequestEntryList', ], ], ], 'PutEventsRequestEntry' => [ 'type' => 'structure', 'members' => [ 'Time' => [ 'shape' => 'EventTime', ], 'Source' => [ 'shape' => 'String', ], 'Resources' => [ 'shape' => 'EventResourceList', ], 'DetailType' => [ 'shape' => 'String', ], 'Detail' => [ 'shape' => 'String', ], ], ], 'PutEventsRequestEntryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PutEventsRequestEntry', ], 'max' => 10, 'min' => 1, ], 'PutEventsResponse' => [ 'type' => 'structure', 'members' => [ 'FailedEntryCount' => [ 'shape' => 'Integer', ], 'Entries' => [ 'shape' => 'PutEventsResultEntryList', ], ], ], 'PutEventsResultEntry' => [ 'type' => 'structure', 'members' => [ 'EventId' => [ 'shape' => 'EventId', ], 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'ErrorMessage' => [ 'shape' => 'ErrorMessage', ], ], ], 'PutEventsResultEntryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PutEventsResultEntry', ], ], 'PutPermissionRequest' => [ 'type' => 'structure', 'required' => [ 'Action', 'Principal', 'StatementId', ], 'members' => [ 'Action' => [ 'shape' => 'Action', ], 'Principal' => [ 'shape' => 'Principal', ], 'StatementId' => [ 'shape' => 'StatementId', ], ], ], 'PutRuleRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'RuleName', ], 'ScheduleExpression' => [ 'shape' => 'ScheduleExpression', ], 'EventPattern' => [ 'shape' => 'EventPattern', ], 'State' => [ 'shape' => 'RuleState', ], 'Description' => [ 'shape' => 'RuleDescription', ], 'RoleArn' => [ 'shape' => 'RoleArn', ], ], ], 'PutRuleResponse' => [ 'type' => 'structure', 'members' => [ 'RuleArn' => [ 'shape' => 'RuleArn', ], ], ], 'PutTargetsRequest' => [ 'type' => 'structure', 'required' => [ 'Rule', 'Targets', ], 'members' => [ 'Rule' => [ 'shape' => 'RuleName', ], 'Targets' => [ 'shape' => 'TargetList', ], ], ], 'PutTargetsResponse' => [ 'type' => 'structure', 'members' => [ 'FailedEntryCount' => [ 'shape' => 'Integer', ], 'FailedEntries' => [ 'shape' => 'PutTargetsResultEntryList', ], ], ], 'PutTargetsResultEntry' => [ 'type' => 'structure', 'members' => [ 'TargetId' => [ 'shape' => 'TargetId', ], 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'ErrorMessage' => [ 'shape' => 'ErrorMessage', ], ], ], 'PutTargetsResultEntryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PutTargetsResultEntry', ], ], 'RemovePermissionRequest' => [ 'type' => 'structure', 'required' => [ 'StatementId', ], 'members' => [ 'StatementId' => [ 'shape' => 'StatementId', ], ], ], 'RemoveTargetsRequest' => [ 'type' => 'structure', 'required' => [ 'Rule', 'Ids', ], 'members' => [ 'Rule' => [ 'shape' => 'RuleName', ], 'Ids' => [ 'shape' => 'TargetIdList', ], ], ], 'RemoveTargetsResponse' => [ 'type' => 'structure', 'members' => [ 'FailedEntryCount' => [ 'shape' => 'Integer', ], 'FailedEntries' => [ 'shape' => 'RemoveTargetsResultEntryList', ], ], ], 'RemoveTargetsResultEntry' => [ 'type' => 'structure', 'members' => [ 'TargetId' => [ 'shape' => 'TargetId', ], 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'ErrorMessage' => [ 'shape' => 'ErrorMessage', ], ], ], 'RemoveTargetsResultEntryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RemoveTargetsResultEntry', ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'RoleArn' => [ 'type' => 'string', 'max' => 1600, 'min' => 1, ], 'Rule' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'RuleName', ], 'Arn' => [ 'shape' => 'RuleArn', ], 'EventPattern' => [ 'shape' => 'EventPattern', ], 'State' => [ 'shape' => 'RuleState', ], 'Description' => [ 'shape' => 'RuleDescription', ], 'ScheduleExpression' => [ 'shape' => 'ScheduleExpression', ], 'RoleArn' => [ 'shape' => 'RoleArn', ], ], ], 'RuleArn' => [ 'type' => 'string', 'max' => 1600, 'min' => 1, ], 'RuleDescription' => [ 'type' => 'string', 'max' => 512, ], 'RuleName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[\\.\\-_A-Za-z0-9]+', ], 'RuleNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuleName', ], ], 'RuleResponseList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Rule', ], ], 'RuleState' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'RunCommandParameters' => [ 'type' => 'structure', 'required' => [ 'RunCommandTargets', ], 'members' => [ 'RunCommandTargets' => [ 'shape' => 'RunCommandTargets', ], ], ], 'RunCommandTarget' => [ 'type' => 'structure', 'required' => [ 'Key', 'Values', ], 'members' => [ 'Key' => [ 'shape' => 'RunCommandTargetKey', ], 'Values' => [ 'shape' => 'RunCommandTargetValues', ], ], ], 'RunCommandTargetKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^[\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*$', ], 'RunCommandTargetValue' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'RunCommandTargetValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunCommandTargetValue', ], 'max' => 50, 'min' => 1, ], 'RunCommandTargets' => [ 'type' => 'list', 'member' => [ 'shape' => 'RunCommandTarget', ], 'max' => 5, 'min' => 1, ], 'ScheduleExpression' => [ 'type' => 'string', 'max' => 256, ], 'SqsParameters' => [ 'type' => 'structure', 'members' => [ 'MessageGroupId' => [ 'shape' => 'MessageGroupId', ], ], ], 'StatementId' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[a-zA-Z0-9-_]+', ], 'String' => [ 'type' => 'string', ], 'Target' => [ 'type' => 'structure', 'required' => [ 'Id', 'Arn', ], 'members' => [ 'Id' => [ 'shape' => 'TargetId', ], 'Arn' => [ 'shape' => 'TargetArn', ], 'RoleArn' => [ 'shape' => 'RoleArn', ], 'Input' => [ 'shape' => 'TargetInput', ], 'InputPath' => [ 'shape' => 'TargetInputPath', ], 'InputTransformer' => [ 'shape' => 'InputTransformer', ], 'KinesisParameters' => [ 'shape' => 'KinesisParameters', ], 'RunCommandParameters' => [ 'shape' => 'RunCommandParameters', ], 'EcsParameters' => [ 'shape' => 'EcsParameters', ], 'BatchParameters' => [ 'shape' => 'BatchParameters', ], 'SqsParameters' => [ 'shape' => 'SqsParameters', ], ], ], 'TargetArn' => [ 'type' => 'string', 'max' => 1600, 'min' => 1, ], 'TargetId' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[\\.\\-_A-Za-z0-9]+', ], 'TargetIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TargetId', ], 'max' => 100, 'min' => 1, ], 'TargetInput' => [ 'type' => 'string', 'max' => 8192, ], 'TargetInputPath' => [ 'type' => 'string', 'max' => 256, ], 'TargetList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Target', ], 'max' => 100, 'min' => 1, ], 'TargetPartitionKeyPath' => [ 'type' => 'string', 'max' => 256, ], 'TestEventPatternRequest' => [ 'type' => 'structure', 'required' => [ 'EventPattern', 'Event', ], 'members' => [ 'EventPattern' => [ 'shape' => 'EventPattern', ], 'Event' => [ 'shape' => 'String', ], ], ], 'TestEventPatternResponse' => [ 'type' => 'structure', 'members' => [ 'Result' => [ 'shape' => 'Boolean', ], ], ], 'TransformerInput' => [ 'type' => 'string', 'max' => 8192, 'min' => 1, ], 'TransformerPaths' => [ 'type' => 'map', 'key' => [ 'shape' => 'InputTransformerPathKey', ], 'value' => [ 'shape' => 'TargetInputPath', ], 'max' => 10, ], ],];
