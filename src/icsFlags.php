<?php
declare(strict_types=1);

/*
 * 	Flag definitions
 *
 *	@package	sync*gw
 *	@subpackage	Bulk Data Transfer Protocol
 *	@copyright	(c) 2008 - 2024 Florian Daeumling, Germany. All right reserved
 * 	@license 	LGPL-3.0-or-later
 */

namespace syncgw\ics;

class icsFlags {

	// [MS-OXCFXICS] 2.2.3.1.1.1.1 RopFastTransferSourceCopyTo ROP Request Buffer
	const SYNC_CONF					= [
		'Unicode'					=> 0x0001,	// whether the client supports Unicode
		'NoDel'						=> 0x0002,	// how the server downloads information about item deletions
		'IgnoreInScope'				=> 0x0004,	// whether the server downloads information about messages that
												// went out of scope
		'ReadState'					=> 0x0008,	// whether the server downloads information about changes to the
												// read state of messages
		'FAI'						=> 0x0010,	// whether the server downloads information about changes to FAI messages
		'Normal'					=> 0x0020,	// whether the server downloads information about changes to normal messages
		'OonlySpecificProps'		=> 0x0080,	// whether the server limits or excludes properties and subobjects output
												// to the properties listed in PropertyTags
		'NoForeignIds'				=> 0x0100,	// whether the server ignores any persisted values when producing output
												// for folder and message changes
		'BestBody'					=> 0x2000,	// whether the server outputs message bodies in their original format or in RTF
		'IgnoreSpecificOnFAI'		=> 0x4000,	// whether the server outputs properties and subobjects of FAI messages
		'Progress'					=> 0x8000,	// whether the server injects progress information into the output
												// FastTransfer stream
	];

	// [MS-OXCFXICS] 2.2.3.1.1.1.1 RopFastTransferSourceCopyTo ROP Request Buffer
	const SYNC_CONF_EXTRA			= [
		'null'						=> 0x00000000,
		'EId'						=> 0x00000001,	// whether the server includes the PidTagFolderId or PidTagMid
													// properties in the folder change or message change header
		'MessageSize'				=> 0x00000002,	// whether the server includes the PidTagMessageSize property
													// in the message change header
		'ChangeNumber'				=> 0x00000004,	// whether the server includes the PidTagChangeNumber property
													// in the message change header
		'OrderByDeliberyTime'		=> 0x00000008,	// whether the server sorts messages by their delivery Time

	];

	// [MS-OXCFXICS] 2.2.3.1.1.1.1 RopFastTransferSourceCopyTo ROP Request Buffer
	const SYNC_OP		 			= [
		'Unicode'					=> 0x01,	// string properties are output in Unicode or in the code page
												// set on the current connection
		'UseCPId'					=> 0x02,	// support for code page property types
	//	'ForUpload'					=> 0x03,	// Objectbination of the Unicode and UseCpid flags
		'RecoverMode'				=> 0x04,	// indicates that the client supports recovery mode
		'ForceUnicode'				=> 0x08,	// whether string properties are output in Unicode
		'PartialItem'				=> 0x10,	// MUST only be set for content synchronization download operations
	];

}
