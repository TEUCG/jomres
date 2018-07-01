<?php
// This file was auto-generated from sdk-root/src/data/workspaces/2015-04-08/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2015-04-08', 'endpointPrefix' => 'workspaces', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Amazon WorkSpaces', 'signatureVersion' => 'v4', 'targetPrefix' => 'WorkspacesService', 'uid' => 'workspaces-2015-04-08', ], 'operations' => [ 'CreateTags' => [ 'name' => 'CreateTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateTagsRequest', ], 'output' => [ 'shape' => 'CreateTagsResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'ResourceLimitExceededException', ], ], ], 'CreateWorkspaces' => [ 'name' => 'CreateWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateWorkspacesRequest', ], 'output' => [ 'shape' => 'CreateWorkspacesResult', ], 'errors' => [ [ 'shape' => 'ResourceLimitExceededException', ], [ 'shape' => 'InvalidParameterValuesException', ], ], ], 'DeleteTags' => [ 'name' => 'DeleteTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteTagsRequest', ], 'output' => [ 'shape' => 'DeleteTagsResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValuesException', ], ], ], 'DescribeTags' => [ 'name' => 'DescribeTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeTagsRequest', ], 'output' => [ 'shape' => 'DescribeTagsResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DescribeWorkspaceBundles' => [ 'name' => 'DescribeWorkspaceBundles', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeWorkspaceBundlesRequest', ], 'output' => [ 'shape' => 'DescribeWorkspaceBundlesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], ], ], 'DescribeWorkspaceDirectories' => [ 'name' => 'DescribeWorkspaceDirectories', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeWorkspaceDirectoriesRequest', ], 'output' => [ 'shape' => 'DescribeWorkspaceDirectoriesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], ], ], 'DescribeWorkspaces' => [ 'name' => 'DescribeWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeWorkspacesRequest', ], 'output' => [ 'shape' => 'DescribeWorkspacesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'ResourceUnavailableException', ], ], ], 'DescribeWorkspacesConnectionStatus' => [ 'name' => 'DescribeWorkspacesConnectionStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeWorkspacesConnectionStatusRequest', ], 'output' => [ 'shape' => 'DescribeWorkspacesConnectionStatusResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], ], ], 'ModifyWorkspaceProperties' => [ 'name' => 'ModifyWorkspaceProperties', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ModifyWorkspacePropertiesRequest', ], 'output' => [ 'shape' => 'ModifyWorkspacePropertiesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValuesException', ], [ 'shape' => 'InvalidResourceStateException', ], [ 'shape' => 'OperationInProgressException', ], [ 'shape' => 'UnsupportedWorkspaceConfigurationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceUnavailableException', ], ], ], 'RebootWorkspaces' => [ 'name' => 'RebootWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RebootWorkspacesRequest', ], 'output' => [ 'shape' => 'RebootWorkspacesResult', ], ], 'RebuildWorkspaces' => [ 'name' => 'RebuildWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RebuildWorkspacesRequest', ], 'output' => [ 'shape' => 'RebuildWorkspacesResult', ], ], 'StartWorkspaces' => [ 'name' => 'StartWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartWorkspacesRequest', ], 'output' => [ 'shape' => 'StartWorkspacesResult', ], ], 'StopWorkspaces' => [ 'name' => 'StopWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopWorkspacesRequest', ], 'output' => [ 'shape' => 'StopWorkspacesResult', ], ], 'TerminateWorkspaces' => [ 'name' => 'TerminateWorkspaces', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TerminateWorkspacesRequest', ], 'output' => [ 'shape' => 'TerminateWorkspacesResult', ], ], ], 'shapes' => [ 'ARN' => [ 'type' => 'string', 'pattern' => '^arn:aws:[A-Za-z0-9][A-za-z0-9_/.-]{0,62}:[A-za-z0-9_/.-]{0,63}:[A-za-z0-9_/.-]{0,63}:[A-Za-z0-9][A-za-z0-9_/.-]{0,127}$', ], 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'Alias' => [ 'type' => 'string', ], 'BooleanObject' => [ 'type' => 'boolean', ], 'BundleId' => [ 'type' => 'string', 'pattern' => '^wsb-[0-9a-z]{8,63}$', ], 'BundleIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BundleId', ], 'max' => 25, 'min' => 1, ], 'BundleList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceBundle', ], ], 'BundleOwner' => [ 'type' => 'string', ], 'Compute' => [ 'type' => 'string', 'enum' => [ 'VALUE', 'STANDARD', 'PERFORMANCE', 'POWER', 'GRAPHICS', ], ], 'ComputeType' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'Compute', ], ], ], 'ComputerName' => [ 'type' => 'string', ], 'ConnectionState' => [ 'type' => 'string', 'enum' => [ 'CONNECTED', 'DISCONNECTED', 'UNKNOWN', ], ], 'CreateTagsRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceId', 'Tags', ], 'members' => [ 'ResourceId' => [ 'shape' => 'NonEmptyString', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'CreateTagsResult' => [ 'type' => 'structure', 'members' => [], ], 'CreateWorkspacesRequest' => [ 'type' => 'structure', 'required' => [ 'Workspaces', ], 'members' => [ 'Workspaces' => [ 'shape' => 'WorkspaceRequestList', ], ], ], 'CreateWorkspacesResult' => [ 'type' => 'structure', 'members' => [ 'FailedRequests' => [ 'shape' => 'FailedCreateWorkspaceRequests', ], 'PendingRequests' => [ 'shape' => 'WorkspaceList', ], ], ], 'DefaultOu' => [ 'type' => 'string', ], 'DefaultWorkspaceCreationProperties' => [ 'type' => 'structure', 'members' => [ 'EnableWorkDocs' => [ 'shape' => 'BooleanObject', ], 'EnableInternetAccess' => [ 'shape' => 'BooleanObject', ], 'DefaultOu' => [ 'shape' => 'DefaultOu', ], 'CustomSecurityGroupId' => [ 'shape' => 'SecurityGroupId', ], 'UserEnabledAsLocalAdministrator' => [ 'shape' => 'BooleanObject', ], ], ], 'DeleteTagsRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceId', 'TagKeys', ], 'members' => [ 'ResourceId' => [ 'shape' => 'NonEmptyString', ], 'TagKeys' => [ 'shape' => 'TagKeyList', ], ], ], 'DeleteTagsResult' => [ 'type' => 'structure', 'members' => [], ], 'DescribeTagsRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceId', ], 'members' => [ 'ResourceId' => [ 'shape' => 'NonEmptyString', ], ], ], 'DescribeTagsResult' => [ 'type' => 'structure', 'members' => [ 'TagList' => [ 'shape' => 'TagList', ], ], ], 'DescribeWorkspaceBundlesRequest' => [ 'type' => 'structure', 'members' => [ 'BundleIds' => [ 'shape' => 'BundleIdList', ], 'Owner' => [ 'shape' => 'BundleOwner', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'DescribeWorkspaceBundlesResult' => [ 'type' => 'structure', 'members' => [ 'Bundles' => [ 'shape' => 'BundleList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'DescribeWorkspaceDirectoriesRequest' => [ 'type' => 'structure', 'members' => [ 'DirectoryIds' => [ 'shape' => 'DirectoryIdList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'DescribeWorkspaceDirectoriesResult' => [ 'type' => 'structure', 'members' => [ 'Directories' => [ 'shape' => 'DirectoryList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'DescribeWorkspacesConnectionStatusRequest' => [ 'type' => 'structure', 'members' => [ 'WorkspaceIds' => [ 'shape' => 'WorkspaceIdList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'DescribeWorkspacesConnectionStatusResult' => [ 'type' => 'structure', 'members' => [ 'WorkspacesConnectionStatus' => [ 'shape' => 'WorkspaceConnectionStatusList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'DescribeWorkspacesRequest' => [ 'type' => 'structure', 'members' => [ 'WorkspaceIds' => [ 'shape' => 'WorkspaceIdList', ], 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'UserName' => [ 'shape' => 'UserName', ], 'BundleId' => [ 'shape' => 'BundleId', ], 'Limit' => [ 'shape' => 'Limit', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'DescribeWorkspacesResult' => [ 'type' => 'structure', 'members' => [ 'Workspaces' => [ 'shape' => 'WorkspaceList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'Description' => [ 'type' => 'string', ], 'DirectoryId' => [ 'type' => 'string', 'pattern' => '^d-[0-9a-f]{8,63}$', ], 'DirectoryIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DirectoryId', ], 'max' => 25, 'min' => 1, ], 'DirectoryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceDirectory', ], ], 'DirectoryName' => [ 'type' => 'string', ], 'DnsIpAddresses' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpAddress', ], ], 'ErrorType' => [ 'type' => 'string', ], 'ExceptionMessage' => [ 'type' => 'string', ], 'FailedCreateWorkspaceRequest' => [ 'type' => 'structure', 'members' => [ 'WorkspaceRequest' => [ 'shape' => 'WorkspaceRequest', ], 'ErrorCode' => [ 'shape' => 'ErrorType', ], 'ErrorMessage' => [ 'shape' => 'Description', ], ], ], 'FailedCreateWorkspaceRequests' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedCreateWorkspaceRequest', ], ], 'FailedRebootWorkspaceRequests' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedWorkspaceChangeRequest', ], ], 'FailedRebuildWorkspaceRequests' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedWorkspaceChangeRequest', ], ], 'FailedStartWorkspaceRequests' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedWorkspaceChangeRequest', ], ], 'FailedStopWorkspaceRequests' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedWorkspaceChangeRequest', ], ], 'FailedTerminateWorkspaceRequests' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedWorkspaceChangeRequest', ], ], 'FailedWorkspaceChangeRequest' => [ 'type' => 'structure', 'members' => [ 'WorkspaceId' => [ 'shape' => 'WorkspaceId', ], 'ErrorCode' => [ 'shape' => 'ErrorType', ], 'ErrorMessage' => [ 'shape' => 'Description', ], ], ], 'InvalidParameterValuesException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'InvalidResourceStateException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'IpAddress' => [ 'type' => 'string', ], 'Limit' => [ 'type' => 'integer', 'max' => 25, 'min' => 1, ], 'ModificationResourceEnum' => [ 'type' => 'string', 'enum' => [ 'ROOT_VOLUME', 'USER_VOLUME', 'COMPUTE_TYPE', ], ], 'ModificationState' => [ 'type' => 'structure', 'members' => [ 'Resource' => [ 'shape' => 'ModificationResourceEnum', ], 'State' => [ 'shape' => 'ModificationStateEnum', ], ], ], 'ModificationStateEnum' => [ 'type' => 'string', 'enum' => [ 'UPDATE_INITIATED', 'UPDATE_IN_PROGRESS', ], ], 'ModificationStateList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModificationState', ], ], 'ModifyWorkspacePropertiesRequest' => [ 'type' => 'structure', 'required' => [ 'WorkspaceId', 'WorkspaceProperties', ], 'members' => [ 'WorkspaceId' => [ 'shape' => 'WorkspaceId', ], 'WorkspaceProperties' => [ 'shape' => 'WorkspaceProperties', ], ], ], 'ModifyWorkspacePropertiesResult' => [ 'type' => 'structure', 'members' => [], ], 'NonEmptyString' => [ 'type' => 'string', 'min' => 1, ], 'OperationInProgressException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'PaginationToken' => [ 'type' => 'string', 'max' => 63, 'min' => 1, ], 'RebootRequest' => [ 'type' => 'structure', 'required' => [ 'WorkspaceId', ], 'members' => [ 'WorkspaceId' => [ 'shape' => 'WorkspaceId', ], ], ], 'RebootWorkspaceRequests' => [ 'type' => 'list', 'member' => [ 'shape' => 'RebootRequest', ], 'max' => 25, 'min' => 1, ], 'RebootWorkspacesRequest' => [ 'type' => 'structure', 'required' => [ 'RebootWorkspaceRequests', ], 'members' => [ 'RebootWorkspaceRequests' => [ 'shape' => 'RebootWorkspaceRequests', ], ], ], 'RebootWorkspacesResult' => [ 'type' => 'structure', 'members' => [ 'FailedRequests' => [ 'shape' => 'FailedRebootWorkspaceRequests', ], ], ], 'RebuildRequest' => [ 'type' => 'structure', 'required' => [ 'WorkspaceId', ], 'members' => [ 'WorkspaceId' => [ 'shape' => 'WorkspaceId', ], ], ], 'RebuildWorkspaceRequests' => [ 'type' => 'list', 'member' => [ 'shape' => 'RebuildRequest', ], 'max' => 1, 'min' => 1, ], 'RebuildWorkspacesRequest' => [ 'type' => 'structure', 'required' => [ 'RebuildWorkspaceRequests', ], 'members' => [ 'RebuildWorkspaceRequests' => [ 'shape' => 'RebuildWorkspaceRequests', ], ], ], 'RebuildWorkspacesResult' => [ 'type' => 'structure', 'members' => [ 'FailedRequests' => [ 'shape' => 'FailedRebuildWorkspaceRequests', ], ], ], 'RegistrationCode' => [ 'type' => 'string', 'max' => 20, 'min' => 1, ], 'ResourceLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], 'ResourceId' => [ 'shape' => 'NonEmptyString', ], ], 'exception' => true, ], 'ResourceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], 'ResourceId' => [ 'shape' => 'NonEmptyString', ], ], 'exception' => true, ], 'RootStorage' => [ 'type' => 'structure', 'members' => [ 'Capacity' => [ 'shape' => 'NonEmptyString', ], ], ], 'RootVolumeSizeGib' => [ 'type' => 'integer', ], 'RunningMode' => [ 'type' => 'string', 'enum' => [ 'AUTO_STOP', 'ALWAYS_ON', ], ], 'RunningModeAutoStopTimeoutInMinutes' => [ 'type' => 'integer', ], 'SecurityGroupId' => [ 'type' => 'string', 'pattern' => '^(sg-[0-9a-f]{8})$', ], 'StartRequest' => [ 'type' => 'structure', 'members' => [ 'WorkspaceId' => [ 'shape' => 'WorkspaceId', ], ], ], 'StartWorkspaceRequests' => [ 'type' => 'list', 'member' => [ 'shape' => 'StartRequest', ], 'max' => 25, 'min' => 1, ], 'StartWorkspacesRequest' => [ 'type' => 'structure', 'required' => [ 'StartWorkspaceRequests', ], 'members' => [ 'StartWorkspaceRequests' => [ 'shape' => 'StartWorkspaceRequests', ], ], ], 'StartWorkspacesResult' => [ 'type' => 'structure', 'members' => [ 'FailedRequests' => [ 'shape' => 'FailedStartWorkspaceRequests', ], ], ], 'StopRequest' => [ 'type' => 'structure', 'members' => [ 'WorkspaceId' => [ 'shape' => 'WorkspaceId', ], ], ], 'StopWorkspaceRequests' => [ 'type' => 'list', 'member' => [ 'shape' => 'StopRequest', ], 'max' => 25, 'min' => 1, ], 'StopWorkspacesRequest' => [ 'type' => 'structure', 'required' => [ 'StopWorkspaceRequests', ], 'members' => [ 'StopWorkspaceRequests' => [ 'shape' => 'StopWorkspaceRequests', ], ], ], 'StopWorkspacesResult' => [ 'type' => 'structure', 'members' => [ 'FailedRequests' => [ 'shape' => 'FailedStopWorkspaceRequests', ], ], ], 'SubnetId' => [ 'type' => 'string', 'pattern' => '^(subnet-[0-9a-f]{8})$', ], 'SubnetIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetId', ], ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 127, 'min' => 1, ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'NonEmptyString', ], ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ], 'TagValue' => [ 'type' => 'string', 'max' => 255, ], 'TerminateRequest' => [ 'type' => 'structure', 'required' => [ 'WorkspaceId', ], 'members' => [ 'WorkspaceId' => [ 'shape' => 'WorkspaceId', ], ], ], 'TerminateWorkspaceRequests' => [ 'type' => 'list', 'member' => [ 'shape' => 'TerminateRequest', ], 'max' => 25, 'min' => 1, ], 'TerminateWorkspacesRequest' => [ 'type' => 'structure', 'required' => [ 'TerminateWorkspaceRequests', ], 'members' => [ 'TerminateWorkspaceRequests' => [ 'shape' => 'TerminateWorkspaceRequests', ], ], ], 'TerminateWorkspacesResult' => [ 'type' => 'structure', 'members' => [ 'FailedRequests' => [ 'shape' => 'FailedTerminateWorkspaceRequests', ], ], ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UnsupportedWorkspaceConfigurationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'UserName' => [ 'type' => 'string', 'max' => 63, 'min' => 1, ], 'UserStorage' => [ 'type' => 'structure', 'members' => [ 'Capacity' => [ 'shape' => 'NonEmptyString', ], ], ], 'UserVolumeSizeGib' => [ 'type' => 'integer', ], 'VolumeEncryptionKey' => [ 'type' => 'string', ], 'Workspace' => [ 'type' => 'structure', 'members' => [ 'WorkspaceId' => [ 'shape' => 'WorkspaceId', ], 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'UserName' => [ 'shape' => 'UserName', ], 'IpAddress' => [ 'shape' => 'IpAddress', ], 'State' => [ 'shape' => 'WorkspaceState', ], 'BundleId' => [ 'shape' => 'BundleId', ], 'SubnetId' => [ 'shape' => 'SubnetId', ], 'ErrorMessage' => [ 'shape' => 'Description', ], 'ErrorCode' => [ 'shape' => 'WorkspaceErrorCode', ], 'ComputerName' => [ 'shape' => 'ComputerName', ], 'VolumeEncryptionKey' => [ 'shape' => 'VolumeEncryptionKey', ], 'UserVolumeEncryptionEnabled' => [ 'shape' => 'BooleanObject', ], 'RootVolumeEncryptionEnabled' => [ 'shape' => 'BooleanObject', ], 'WorkspaceProperties' => [ 'shape' => 'WorkspaceProperties', ], 'ModificationStates' => [ 'shape' => 'ModificationStateList', ], ], ], 'WorkspaceBundle' => [ 'type' => 'structure', 'members' => [ 'BundleId' => [ 'shape' => 'BundleId', ], 'Name' => [ 'shape' => 'NonEmptyString', ], 'Owner' => [ 'shape' => 'BundleOwner', ], 'Description' => [ 'shape' => 'Description', ], 'RootStorage' => [ 'shape' => 'RootStorage', ], 'UserStorage' => [ 'shape' => 'UserStorage', ], 'ComputeType' => [ 'shape' => 'ComputeType', ], ], ], 'WorkspaceConnectionStatus' => [ 'type' => 'structure', 'members' => [ 'WorkspaceId' => [ 'shape' => 'WorkspaceId', ], 'ConnectionState' => [ 'shape' => 'ConnectionState', ], 'ConnectionStateCheckTimestamp' => [ 'shape' => 'Timestamp', ], 'LastKnownUserConnectionTimestamp' => [ 'shape' => 'Timestamp', ], ], ], 'WorkspaceConnectionStatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceConnectionStatus', ], ], 'WorkspaceDirectory' => [ 'type' => 'structure', 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'Alias' => [ 'shape' => 'Alias', ], 'DirectoryName' => [ 'shape' => 'DirectoryName', ], 'RegistrationCode' => [ 'shape' => 'RegistrationCode', ], 'SubnetIds' => [ 'shape' => 'SubnetIds', ], 'DnsIpAddresses' => [ 'shape' => 'DnsIpAddresses', ], 'CustomerUserName' => [ 'shape' => 'UserName', ], 'IamRoleId' => [ 'shape' => 'ARN', ], 'DirectoryType' => [ 'shape' => 'WorkspaceDirectoryType', ], 'WorkspaceSecurityGroupId' => [ 'shape' => 'SecurityGroupId', ], 'State' => [ 'shape' => 'WorkspaceDirectoryState', ], 'WorkspaceCreationProperties' => [ 'shape' => 'DefaultWorkspaceCreationProperties', ], ], ], 'WorkspaceDirectoryState' => [ 'type' => 'string', 'enum' => [ 'REGISTERING', 'REGISTERED', 'DEREGISTERING', 'DEREGISTERED', 'ERROR', ], ], 'WorkspaceDirectoryType' => [ 'type' => 'string', 'enum' => [ 'SIMPLE_AD', 'AD_CONNECTOR', ], ], 'WorkspaceErrorCode' => [ 'type' => 'string', ], 'WorkspaceId' => [ 'type' => 'string', 'pattern' => '^ws-[0-9a-z]{8,63}$', ], 'WorkspaceIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceId', ], 'max' => 25, 'min' => 1, ], 'WorkspaceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Workspace', ], ], 'WorkspaceProperties' => [ 'type' => 'structure', 'members' => [ 'RunningMode' => [ 'shape' => 'RunningMode', ], 'RunningModeAutoStopTimeoutInMinutes' => [ 'shape' => 'RunningModeAutoStopTimeoutInMinutes', ], 'RootVolumeSizeGib' => [ 'shape' => 'RootVolumeSizeGib', ], 'UserVolumeSizeGib' => [ 'shape' => 'UserVolumeSizeGib', ], 'ComputeTypeName' => [ 'shape' => 'Compute', ], ], ], 'WorkspaceRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'UserName', 'BundleId', ], 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'UserName' => [ 'shape' => 'UserName', ], 'BundleId' => [ 'shape' => 'BundleId', ], 'VolumeEncryptionKey' => [ 'shape' => 'VolumeEncryptionKey', ], 'UserVolumeEncryptionEnabled' => [ 'shape' => 'BooleanObject', ], 'RootVolumeEncryptionEnabled' => [ 'shape' => 'BooleanObject', ], 'WorkspaceProperties' => [ 'shape' => 'WorkspaceProperties', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'WorkspaceRequestList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceRequest', ], 'max' => 25, 'min' => 1, ], 'WorkspaceState' => [ 'type' => 'string', 'enum' => [ 'PENDING', 'AVAILABLE', 'IMPAIRED', 'UNHEALTHY', 'REBOOTING', 'STARTING', 'REBUILDING', 'MAINTENANCE', 'TERMINATING', 'TERMINATED', 'SUSPENDED', 'UPDATING', 'STOPPING', 'STOPPED', 'ERROR', ], ], ],];
