<?php
declare(strict_types=1);

/*
 * 	Constant definitions
 *
 *	@package	sync*gw
 *	@subpackage	Bulk Data Transfer Protocol
 *	@copyright	(c) 2008 - 2026 Florian Daeumling, Germany. All right reserved
 * 	@license 	LGPL-3.0-or-later
 */

namespace syncgw\ics;

use syncgw\mapi\mapiDefs;

class icsDefs {

	// [MS-OXCFXICS] 2.2.4.1.5 Meta-Properties
	const ICS_CMD					= [
		'FXDelProp'						=> 0x4016,	// 2.2.4.1.5.1 a directive to a client to delete specific subobjects of the object in context
		'EcWarning'						=> 0x400F,	// 2.2.4.1.5.2 contains a warning that occurred when producing output for an element in context
		'NewFXFolder'					=> 0x4011,	// 2.2.4.1.5.3 information about alternative replicas (1) for a public folder in context
		'IncrSyncGroupId'				=> 0x407C,	// 2.2.4.1.5.4 specifies an identifier of a property group mapping
		'IncrementalSyncMessagePartial'	=> 0x407A,	// 2.2.4.1.5.5 specifies an index of a property group within a property group mapping currently in context
		'DnPrefix'						=> 0x4008,	// 2.2.4.1.5.6 MUST be ignored when received
	];

	// [MS-AXCXICS] 2.2.4.1.1 fixedPropType, varPropType, mvPropType Property Types
	const DATA_TYPE 				= [
		// [MS-AXCXICS] 2.2.4.1.1.1 Code Page Property Types
		'UTF-16LE'					=> 0x8000|mapiDefs::CODEPAGE['UTF-16LE'],
		'ISO-8859-1'				=> 0x8000|mapiDefs::CODEPAGE['ISO-8859-1'],
		'ANSI'						=> 0x8000|mapiDefs::CODEPAGE['ANSI'],
		// [MS-AXCXICS] 2.2.4.1.3 Serialization of Simple Types
		'true'						=> 0x0001,
		'false'						=> 0x0000,

	];

	// [MS-OXCFXICS] 2.2.4.1.4 Markers
	const STREAM_MARKER				= [
		// Folders
		'StartTopFld'				=> 0x40090003,	// start of data that describes a folder
		'EndFolder'					=> 0x400B0003,	// end of serialized data that describes a mailbox folder or subfolder
		'StartSubFld'				=> 0x400A0003,	// start of serialized data that describes a mailbox subfolder

		// Messages and their parts
		'StartMessage'				=> 0x400C0003,	// start of serialized data that describes an e-mail message
		'EndMessage'				=> 0x400D0003,	// start of serialized data that describes an FAI message
		'StartFAIMsg'				=> 0x40100003,	// end of serialized data that describes an e-mail message
		'StartEmbed'				=> 0x40010003,	// start of an embedded e-mail message
		'EndEmbed'					=> 0x40020003,	// end of an embedded e-mail message
		'StartRecip'				=> 0x40030003,	// start of recipient data
		'EndToRecip'				=> 0x40040003,	// end of recipient data
		'NewAttach'					=> 0x40000003,	// start of an attachment
		'EndAttach'					=> 0x400E0003,	// end of an attachment

		// Synchronization download
		'IncrSyncChg'				=> 0x40120003,	// start of ICS information pertaining to the message
		'IncrSyncChgPartial'		=> 0x407D0003,	// start of data that describes the property group mapping for properties that have changed in a partial message
		'IncrSyncDel'				=> 0x40130003,	// start of deleted message data in the stream.
		'IncrSyncEnd'				=> 0x40140003,	// end of serialized ICS data
		'IncrSyncRead'				=> 0x402F0003,	// start of serialized data that describes which messages are to be marked as read or unread
		'IncrSyncStateBegin'		=> 0x403A0003,	// start of data that describes the synchronization state after ICS finishes
		'IncrSyncStateEnd'			=> 0x403B0003,	// end of serialized data that describes the synchronization state after ICS finishes
		'IncrSyncProgressMode'		=> 0x4074000B,	// start of serialized data that describes the size of all the ICS data to be transmitted
		'IncrSyncProgressPerMsg'	=> 0x4075000B,	// start of the serialized data that describes the size of the next message in the stream
		'IncrSyncMessage'			=> 0x40150003,	// start of e-mail data for ICS
		'IncrSyncGroupInfo'			=> 0x407B0102,	// start of data that describes property group mapping information

		// Special
		'FXErrorInfo'				=> 0x40180003,	// start of Error data
	];

	// [MS-OXCFXICS] 2.2.3.2.1.1.1 RopSynchronizationConfigure ROP Request Buffer
	const SYNC_TYPE					= [
		'Content'					=> 0x01,		// a content synchronization operation
		'Hierarchy'					=> 0x02,		// a hierarchy synchronization operation.
	];

	// [MS-AXCXICS] 2.2.3.1.1.5.2 RopFastTransferSourceGetBuffer ROP Response Buffer
	const TRANSFER_STATUS			= [
		'Error'						=> 0x0000,		// The download stopped because a nonrecoverable Error has occurred
		'Partial'					=> 0x0001,		// stream was split, and more data is available
		'NoRoom'					=> 0x0002,		// stream was split, more data is available
		'Done'						=> 0x0003,		// This was the last portion of the FastTransfer stream
	];

}
