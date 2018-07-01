<?php
namespace Aws\AlexaForBusiness;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Alexa For Business** service.
 * @method \Aws\Result associateContactWithAddressBook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateContactWithAddressBookAsync(array $args = [])
 * @method \Aws\Result associateDeviceWithRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDeviceWithRoomAsync(array $args = [])
 * @method \Aws\Result associateSkillGroupWithRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateSkillGroupWithRoomAsync(array $args = [])
 * @method \Aws\Result createAddressBook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAddressBookAsync(array $args = [])
 * @method \Aws\Result createContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContactAsync(array $args = [])
 * @method \Aws\Result createProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProfileAsync(array $args = [])
 * @method \Aws\Result createRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRoomAsync(array $args = [])
 * @method \Aws\Result createSkillGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSkillGroupAsync(array $args = [])
 * @method \Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Aws\Result deleteAddressBook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAddressBookAsync(array $args = [])
 * @method \Aws\Result deleteContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContactAsync(array $args = [])
 * @method \Aws\Result deleteProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProfileAsync(array $args = [])
 * @method \Aws\Result deleteRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRoomAsync(array $args = [])
 * @method \Aws\Result deleteRoomSkillParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRoomSkillParameterAsync(array $args = [])
 * @method \Aws\Result deleteSkillGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSkillGroupAsync(array $args = [])
 * @method \Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \Aws\Result disassociateContactFromAddressBook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateContactFromAddressBookAsync(array $args = [])
 * @method \Aws\Result disassociateDeviceFromRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDeviceFromRoomAsync(array $args = [])
 * @method \Aws\Result disassociateSkillGroupFromRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateSkillGroupFromRoomAsync(array $args = [])
 * @method \Aws\Result getAddressBook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAddressBookAsync(array $args = [])
 * @method \Aws\Result getContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContactAsync(array $args = [])
 * @method \Aws\Result getDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceAsync(array $args = [])
 * @method \Aws\Result getProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProfileAsync(array $args = [])
 * @method \Aws\Result getRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoomAsync(array $args = [])
 * @method \Aws\Result getRoomSkillParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoomSkillParameterAsync(array $args = [])
 * @method \Aws\Result getSkillGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSkillGroupAsync(array $args = [])
 * @method \Aws\Result listSkills(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSkillsAsync(array $args = [])
 * @method \Aws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \Aws\Result putRoomSkillParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRoomSkillParameterAsync(array $args = [])
 * @method \Aws\Result resolveRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resolveRoomAsync(array $args = [])
 * @method \Aws\Result revokeInvitation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeInvitationAsync(array $args = [])
 * @method \Aws\Result searchAddressBooks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchAddressBooksAsync(array $args = [])
 * @method \Aws\Result searchContacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchContactsAsync(array $args = [])
 * @method \Aws\Result searchDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchDevicesAsync(array $args = [])
 * @method \Aws\Result searchProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchProfilesAsync(array $args = [])
 * @method \Aws\Result searchRooms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchRoomsAsync(array $args = [])
 * @method \Aws\Result searchSkillGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchSkillGroupsAsync(array $args = [])
 * @method \Aws\Result searchUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchUsersAsync(array $args = [])
 * @method \Aws\Result sendInvitation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendInvitationAsync(array $args = [])
 * @method \Aws\Result startDeviceSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDeviceSyncAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAddressBook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAddressBookAsync(array $args = [])
 * @method \Aws\Result updateContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateContactAsync(array $args = [])
 * @method \Aws\Result updateDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceAsync(array $args = [])
 * @method \Aws\Result updateProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProfileAsync(array $args = [])
 * @method \Aws\Result updateRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoomAsync(array $args = [])
 * @method \Aws\Result updateSkillGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSkillGroupAsync(array $args = [])
 */
class AlexaForBusinessClient extends AwsClient {}
