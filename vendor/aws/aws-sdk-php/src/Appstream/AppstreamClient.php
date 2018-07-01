<?php
namespace Aws\Appstream;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon AppStream** service.
 * @method \Aws\Result associateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateFleetAsync(array $args = [])
 * @method \Aws\Result copyImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyImageAsync(array $args = [])
 * @method \Aws\Result createDirectoryConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDirectoryConfigAsync(array $args = [])
 * @method \Aws\Result createFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFleetAsync(array $args = [])
 * @method \Aws\Result createImageBuilder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImageBuilderAsync(array $args = [])
 * @method \Aws\Result createImageBuilderStreamingURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImageBuilderStreamingURLAsync(array $args = [])
 * @method \Aws\Result createStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStackAsync(array $args = [])
 * @method \Aws\Result createStreamingURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamingURLAsync(array $args = [])
 * @method \Aws\Result deleteDirectoryConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDirectoryConfigAsync(array $args = [])
 * @method \Aws\Result deleteFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFleetAsync(array $args = [])
 * @method \Aws\Result deleteImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImageAsync(array $args = [])
 * @method \Aws\Result deleteImageBuilder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImageBuilderAsync(array $args = [])
 * @method \Aws\Result deleteStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStackAsync(array $args = [])
 * @method \Aws\Result describeDirectoryConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDirectoryConfigsAsync(array $args = [])
 * @method \Aws\Result describeFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetsAsync(array $args = [])
 * @method \Aws\Result describeImageBuilders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageBuildersAsync(array $args = [])
 * @method \Aws\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \Aws\Result describeSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSessionsAsync(array $args = [])
 * @method \Aws\Result describeStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStacksAsync(array $args = [])
 * @method \Aws\Result disassociateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateFleetAsync(array $args = [])
 * @method \Aws\Result expireSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise expireSessionAsync(array $args = [])
 * @method \Aws\Result listAssociatedFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedFleetsAsync(array $args = [])
 * @method \Aws\Result listAssociatedStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedStacksAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result startFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFleetAsync(array $args = [])
 * @method \Aws\Result startImageBuilder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startImageBuilderAsync(array $args = [])
 * @method \Aws\Result stopFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopFleetAsync(array $args = [])
 * @method \Aws\Result stopImageBuilder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopImageBuilderAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateDirectoryConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDirectoryConfigAsync(array $args = [])
 * @method \Aws\Result updateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFleetAsync(array $args = [])
 * @method \Aws\Result updateStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStackAsync(array $args = [])
 */
class AppstreamClient extends AwsClient {}
