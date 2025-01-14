<?php
/**
 * Generated by "tools/gen_unfc_regex_alts.php". Don't edit!
 * Alternatives generated from "/tests/UCD-9.0.0/DerivedNormalizationProps.txt" and "/tests/UCD-9.0.0/extracted/DerivedCombiningClass.txt".
 * Quick check NO and MAYBE codepoints, and reordered codepoints.
 */

define( 'UNFC_REGEX_ALTS_NFC_NOES', '\xcd[\x80\x81\x83\x84\xb4\xbe]|\xce\x87|\xe0(?:\xa5[\x98-\x9f]|\xa7[\x9c\x9d\x9f]|\xa8[\xb3\xb6]|\xa9[\x99-\x9b\x9e]|\xad[\x9c\x9d]|\xbd[\x83\x8d\x92\x97\x9c\xa9\xb3\xb5\xb6\xb8]|\xbe[\x81\x93\x9d\xa2\xa7\xac\xb9])|\xe1(?:\xbd[\xb1\xb3\xb5\xb7\xb9\xbb\xbd]|\xbe[\xbb\xbe]|\xbf[\x89\x8b\x93\x9b\xa3\xab\xae\xaf\xb9\xbb\xbd])|\xe2(?:\x80[\x80\x81]|\x84[\xa6\xaa\xab]|\x8c[\xa9\xaa]|\xab\x9c)|\xef(?:[\xa4-\xa7][\x80-\xbf]|\xa8[\x80-\x8d\x90\x92\x95-\x9e\xa0\xa2\xa5\xa6\xaa-\xbf]|\xa9[\x80-\xad\xb0-\xbf]|\xaa[\x80-\xbf]|\xab[\x80-\x99]|\xac[\x9d\x9f\xaa-\xb6\xb8-\xbc\xbe]|\xad[\x80\x81\x83\x84\x86-\x8e])|\xf0(?:\x9d(?:\x85[\x9e-\xa4]|\x86[\xbb-\xbf]|\x87\x80)|\xaf(?:[\xa0-\xa7][\x80-\xbf]|\xa8[\x80-\x9d]))' );
define( 'UNFC_REGEX_NFC_NOES', '/' . UNFC_REGEX_ALTS_NFC_NOES . '/' );

define( 'UNFC_REGEX_ALTS_NFC_NOES_MAYBES_REORDERS', '\xcc[\x80-\xbf]|\xcd[\x80-\x8e\x90-\xaf\xb4\xbe]|\xce\x87|\xd2[\x83-\x87]|\xd6[\x91-\xbd\xbf]|\xd7[\x81\x82\x84\x85\x87]|\xd8[\x90-\x9a]|\xd9[\x8b-\x9f\xb0]|\xdb[\x96-\x9c\x9f-\xa4\xa7\xa8\xaa-\xad]|\xdc[\x91\xb0-\xbf]|\xdd[\x80-\x8a]|\xdf[\xab-\xb3]|\xe0(?:\xa0[\x96-\x99\x9b-\xa3\xa5-\xa7\xa9-\xad]|\xa1[\x99-\x9b]|\xa3[\x94-\xa1\xa3-\xbf]|\xa4\xbc|\xa5[\x8d\x91-\x94\x98-\x9f]|\xa6[\xbc\xbe]|\xa7[\x8d\x97\x9c\x9d\x9f]|\xa8[\xb3\xb6\xbc]|\xa9[\x8d\x99-\x9b\x9e]|\xaa\xbc|\xab\x8d|\xac[\xbc\xbe]|\xad[\x8d\x96\x97\x9c\x9d]|\xae\xbe|\xaf[\x8d\x97]|\xb1[\x8d\x95\x96]|\xb2\xbc|\xb3[\x82\x8d\x95\x96]|\xb4\xbe|\xb5[\x8d\x97]|\xb7[\x8a\x8f\x9f]|\xb8[\xb8-\xba]|\xb9[\x88-\x8b]|\xba[\xb8\xb9]|\xbb[\x88-\x8b]|\xbc[\x98\x99\xb5\xb7\xb9]|\xbd[\x83\x8d\x92\x97\x9c\xa9\xb1-\xb6\xb8\xba-\xbd]|\xbe[\x80-\x84\x86\x87\x93\x9d\xa2\xa7\xac\xb9]|\xbf\x86)|\xe1(?:\x80[\xae\xb7\xb9\xba]|\x82\x8d|\x85[\xa1-\xb5]|\x86[\xa8-\xbf]|\x87[\x80-\x82]|\x8d[\x9d-\x9f]|\x9c[\x94\xb4]|\x9f[\x92\x9d]|\xa2\xa9|\xa4[\xb9-\xbb]|\xa8[\x97\x98]|\xa9[\xa0\xb5-\xbc\xbf]|\xaa[\xb0-\xbd]|\xac[\xb4\xb5]|\xad[\x84\xab-\xb3]|\xae[\xaa\xab]|\xaf[\xa6\xb2\xb3]|\xb0\xb7|\xb3[\x90-\x92\x94-\xa0\xa2-\xa8\xad\xb4\xb8\xb9]|\xb7[\x80-\xb5\xbb-\xbf]|\xbd[\xb1\xb3\xb5\xb7\xb9\xbb\xbd]|\xbe[\xbb\xbe]|\xbf[\x89\x8b\x93\x9b\xa3\xab\xae\xaf\xb9\xbb\xbd])|\xe2(?:\x80[\x80\x81]|\x83[\x90-\x9c\xa1\xa5-\xb0]|\x84[\xa6\xaa\xab]|\x8c[\xa9\xaa]|\xab\x9c|\xb3[\xaf-\xb1]|\xb5\xbf|\xb7[\xa0-\xbf])|\xe3(?:\x80[\xaa-\xaf]|\x82[\x99\x9a])|\xea(?:\x99[\xaf\xb4-\xbd]|\x9a[\x9e\x9f]|\x9b[\xb0\xb1]|\xa0\x86|\xa3[\x84\xa0-\xb1]|\xa4[\xab-\xad]|\xa5\x93|\xa6\xb3|\xa7\x80|\xaa[\xb0\xb2-\xb4\xb7\xb8\xbe\xbf]|\xab[\x81\xb6]|\xaf\xad)|\xef(?:[\xa4-\xa7][\x80-\xbf]|\xa8[\x80-\x8d\x90\x92\x95-\x9e\xa0\xa2\xa5\xa6\xaa-\xbf]|\xa9[\x80-\xad\xb0-\xbf]|\xaa[\x80-\xbf]|\xab[\x80-\x99]|\xac[\x9d-\x9f\xaa-\xb6\xb8-\xbc\xbe]|\xad[\x80\x81\x83\x84\x86-\x8e]|\xb8[\xa0-\xaf])|\xf0(?:\x90(?:\x87\xbd|\x8b\xa0|\x8d[\xb6-\xba]|\xa8[\x8d\x8f\xb8-\xba\xbf]|\xab[\xa5\xa6])|\x91(?:\x81[\x86\xbf]|\x82[\xb9\xba]|\x84[\x80-\x82\xa7\xb3\xb4]|\x85\xb3|\x87[\x80\x8a]|\x88[\xb5\xb6]|\x8b[\xa9\xaa]|\x8c[\xbc\xbe]|\x8d[\x8d\x97\xa6-\xac\xb0-\xb4]|\x91[\x82\x86]|\x92[\xb0\xba\xbd]|\x93[\x82\x83]|\x96[\xaf\xbf]|\x97\x80|\x98\xbf|\x9a[\xb6\xb7]|\x9c\xab|\xb0\xbf)|\x96(?:\xab[\xb0-\xb4]|\xac[\xb0-\xb6])|\x9b\xb2\x9e|\x9d(?:\x85[\x9e-\xa9\xad-\xb2\xbb-\xbf]|\x86[\x80-\x82\x85-\x8b\xaa-\xad\xbb-\xbf]|\x87\x80|\x89[\x82-\x84])|\x9e(?:\x80[\x80-\x86\x88-\x98\x9b-\xa1\xa3\xa4\xa6-\xaa]|\xa3[\x90-\x96]|\xa5[\x84-\x8a])|\xaf(?:[\xa0-\xa7][\x80-\xbf]|\xa8[\x80-\x9d]))' );
define( 'UNFC_REGEX_NFC_NOES_MAYBES_REORDERS', '/' . UNFC_REGEX_ALTS_NFC_NOES_MAYBES_REORDERS . '/' );

// The following unicode versions of the global variable regex alternatives and dumps are for testing/debugging purposes only.

if ( ( defined( 'WP_DEBUG' ) && WP_DEBUG ) ) {

	define( 'UNFC_REGEX_ALTS_NFC_NOES_U', '\x{340}\x{341}\x{343}\x{344}\x{374}\x{37e}\x{387}\x{958}-\x{95f}\x{9dc}\x{9dd}\x{9df}\x{a33}\x{a36}\x{a59}-\x{a5b}\x{a5e}\x{b5c}\x{b5d}\x{f43}\x{f4d}\x{f52}\x{f57}\x{f5c}\x{f69}\x{f73}\x{f75}\x{f76}\x{f78}\x{f81}\x{f93}\x{f9d}\x{fa2}\x{fa7}\x{fac}\x{fb9}\x{1f71}\x{1f73}\x{1f75}\x{1f77}\x{1f79}\x{1f7b}\x{1f7d}\x{1fbb}\x{1fbe}\x{1fc9}\x{1fcb}\x{1fd3}\x{1fdb}\x{1fe3}\x{1feb}\x{1fee}\x{1fef}\x{1ff9}\x{1ffb}\x{1ffd}\x{2000}\x{2001}\x{2126}\x{212a}\x{212b}\x{2329}\x{232a}\x{2adc}\x{f900}-\x{fa0d}\x{fa10}\x{fa12}\x{fa15}-\x{fa1e}\x{fa20}\x{fa22}\x{fa25}\x{fa26}\x{fa2a}-\x{fa6d}\x{fa70}-\x{fad9}\x{fb1d}\x{fb1f}\x{fb2a}-\x{fb36}\x{fb38}-\x{fb3c}\x{fb3e}\x{fb40}\x{fb41}\x{fb43}\x{fb44}\x{fb46}-\x{fb4e}\x{1d15e}-\x{1d164}\x{1d1bb}-\x{1d1c0}\x{2f800}-\x{2fa1d}' );
	define( 'UNFC_REGEX_NFC_NOES_U', '/[' . UNFC_REGEX_ALTS_NFC_NOES_U . ']/u' );

	global $unfc_nfc_noes;
	$unfc_nfc_noes = array( // 1120 codepoints
		0x340, 0x341, 0x343, 0x344, 0x374, 0x37e, 0x387, 0x958, 0x959, 0x95a, 0x95b, 0x95c, 0x95d, 0x95e, 0x95f, 0x9dc, 0x9dd, 0x9df, 0xa33, 0xa36,
		0xa59, 0xa5a, 0xa5b, 0xa5e, 0xb5c, 0xb5d, 0xf43, 0xf4d, 0xf52, 0xf57, 0xf5c, 0xf69, 0xf73, 0xf75, 0xf76, 0xf78, 0xf81, 0xf93, 0xf9d, 0xfa2,
		0xfa7, 0xfac, 0xfb9, 0x1f71, 0x1f73, 0x1f75, 0x1f77, 0x1f79, 0x1f7b, 0x1f7d, 0x1fbb, 0x1fbe, 0x1fc9, 0x1fcb, 0x1fd3, 0x1fdb, 0x1fe3, 0x1feb, 0x1fee, 0x1fef,
		0x1ff9, 0x1ffb, 0x1ffd, 0x2000, 0x2001, 0x2126, 0x212a, 0x212b, 0x2329, 0x232a, 0x2adc, 0xf900, 0xf901, 0xf902, 0xf903, 0xf904, 0xf905, 0xf906, 0xf907, 0xf908,
		0xf909, 0xf90a, 0xf90b, 0xf90c, 0xf90d, 0xf90e, 0xf90f, 0xf910, 0xf911, 0xf912, 0xf913, 0xf914, 0xf915, 0xf916, 0xf917, 0xf918, 0xf919, 0xf91a, 0xf91b, 0xf91c,
		0xf91d, 0xf91e, 0xf91f, 0xf920, 0xf921, 0xf922, 0xf923, 0xf924, 0xf925, 0xf926, 0xf927, 0xf928, 0xf929, 0xf92a, 0xf92b, 0xf92c, 0xf92d, 0xf92e, 0xf92f, 0xf930,
		0xf931, 0xf932, 0xf933, 0xf934, 0xf935, 0xf936, 0xf937, 0xf938, 0xf939, 0xf93a, 0xf93b, 0xf93c, 0xf93d, 0xf93e, 0xf93f, 0xf940, 0xf941, 0xf942, 0xf943, 0xf944,
		0xf945, 0xf946, 0xf947, 0xf948, 0xf949, 0xf94a, 0xf94b, 0xf94c, 0xf94d, 0xf94e, 0xf94f, 0xf950, 0xf951, 0xf952, 0xf953, 0xf954, 0xf955, 0xf956, 0xf957, 0xf958,
		0xf959, 0xf95a, 0xf95b, 0xf95c, 0xf95d, 0xf95e, 0xf95f, 0xf960, 0xf961, 0xf962, 0xf963, 0xf964, 0xf965, 0xf966, 0xf967, 0xf968, 0xf969, 0xf96a, 0xf96b, 0xf96c,
		0xf96d, 0xf96e, 0xf96f, 0xf970, 0xf971, 0xf972, 0xf973, 0xf974, 0xf975, 0xf976, 0xf977, 0xf978, 0xf979, 0xf97a, 0xf97b, 0xf97c, 0xf97d, 0xf97e, 0xf97f, 0xf980,
		0xf981, 0xf982, 0xf983, 0xf984, 0xf985, 0xf986, 0xf987, 0xf988, 0xf989, 0xf98a, 0xf98b, 0xf98c, 0xf98d, 0xf98e, 0xf98f, 0xf990, 0xf991, 0xf992, 0xf993, 0xf994,
		0xf995, 0xf996, 0xf997, 0xf998, 0xf999, 0xf99a, 0xf99b, 0xf99c, 0xf99d, 0xf99e, 0xf99f, 0xf9a0, 0xf9a1, 0xf9a2, 0xf9a3, 0xf9a4, 0xf9a5, 0xf9a6, 0xf9a7, 0xf9a8,
		0xf9a9, 0xf9aa, 0xf9ab, 0xf9ac, 0xf9ad, 0xf9ae, 0xf9af, 0xf9b0, 0xf9b1, 0xf9b2, 0xf9b3, 0xf9b4, 0xf9b5, 0xf9b6, 0xf9b7, 0xf9b8, 0xf9b9, 0xf9ba, 0xf9bb, 0xf9bc,
		0xf9bd, 0xf9be, 0xf9bf, 0xf9c0, 0xf9c1, 0xf9c2, 0xf9c3, 0xf9c4, 0xf9c5, 0xf9c6, 0xf9c7, 0xf9c8, 0xf9c9, 0xf9ca, 0xf9cb, 0xf9cc, 0xf9cd, 0xf9ce, 0xf9cf, 0xf9d0,
		0xf9d1, 0xf9d2, 0xf9d3, 0xf9d4, 0xf9d5, 0xf9d6, 0xf9d7, 0xf9d8, 0xf9d9, 0xf9da, 0xf9db, 0xf9dc, 0xf9dd, 0xf9de, 0xf9df, 0xf9e0, 0xf9e1, 0xf9e2, 0xf9e3, 0xf9e4,
		0xf9e5, 0xf9e6, 0xf9e7, 0xf9e8, 0xf9e9, 0xf9ea, 0xf9eb, 0xf9ec, 0xf9ed, 0xf9ee, 0xf9ef, 0xf9f0, 0xf9f1, 0xf9f2, 0xf9f3, 0xf9f4, 0xf9f5, 0xf9f6, 0xf9f7, 0xf9f8,
		0xf9f9, 0xf9fa, 0xf9fb, 0xf9fc, 0xf9fd, 0xf9fe, 0xf9ff, 0xfa00, 0xfa01, 0xfa02, 0xfa03, 0xfa04, 0xfa05, 0xfa06, 0xfa07, 0xfa08, 0xfa09, 0xfa0a, 0xfa0b, 0xfa0c,
		0xfa0d, 0xfa10, 0xfa12, 0xfa15, 0xfa16, 0xfa17, 0xfa18, 0xfa19, 0xfa1a, 0xfa1b, 0xfa1c, 0xfa1d, 0xfa1e, 0xfa20, 0xfa22, 0xfa25, 0xfa26, 0xfa2a, 0xfa2b, 0xfa2c,
		0xfa2d, 0xfa2e, 0xfa2f, 0xfa30, 0xfa31, 0xfa32, 0xfa33, 0xfa34, 0xfa35, 0xfa36, 0xfa37, 0xfa38, 0xfa39, 0xfa3a, 0xfa3b, 0xfa3c, 0xfa3d, 0xfa3e, 0xfa3f, 0xfa40,
		0xfa41, 0xfa42, 0xfa43, 0xfa44, 0xfa45, 0xfa46, 0xfa47, 0xfa48, 0xfa49, 0xfa4a, 0xfa4b, 0xfa4c, 0xfa4d, 0xfa4e, 0xfa4f, 0xfa50, 0xfa51, 0xfa52, 0xfa53, 0xfa54,
		0xfa55, 0xfa56, 0xfa57, 0xfa58, 0xfa59, 0xfa5a, 0xfa5b, 0xfa5c, 0xfa5d, 0xfa5e, 0xfa5f, 0xfa60, 0xfa61, 0xfa62, 0xfa63, 0xfa64, 0xfa65, 0xfa66, 0xfa67, 0xfa68,
		0xfa69, 0xfa6a, 0xfa6b, 0xfa6c, 0xfa6d, 0xfa70, 0xfa71, 0xfa72, 0xfa73, 0xfa74, 0xfa75, 0xfa76, 0xfa77, 0xfa78, 0xfa79, 0xfa7a, 0xfa7b, 0xfa7c, 0xfa7d, 0xfa7e,
		0xfa7f, 0xfa80, 0xfa81, 0xfa82, 0xfa83, 0xfa84, 0xfa85, 0xfa86, 0xfa87, 0xfa88, 0xfa89, 0xfa8a, 0xfa8b, 0xfa8c, 0xfa8d, 0xfa8e, 0xfa8f, 0xfa90, 0xfa91, 0xfa92,
		0xfa93, 0xfa94, 0xfa95, 0xfa96, 0xfa97, 0xfa98, 0xfa99, 0xfa9a, 0xfa9b, 0xfa9c, 0xfa9d, 0xfa9e, 0xfa9f, 0xfaa0, 0xfaa1, 0xfaa2, 0xfaa3, 0xfaa4, 0xfaa5, 0xfaa6,
		0xfaa7, 0xfaa8, 0xfaa9, 0xfaaa, 0xfaab, 0xfaac, 0xfaad, 0xfaae, 0xfaaf, 0xfab0, 0xfab1, 0xfab2, 0xfab3, 0xfab4, 0xfab5, 0xfab6, 0xfab7, 0xfab8, 0xfab9, 0xfaba,
		0xfabb, 0xfabc, 0xfabd, 0xfabe, 0xfabf, 0xfac0, 0xfac1, 0xfac2, 0xfac3, 0xfac4, 0xfac5, 0xfac6, 0xfac7, 0xfac8, 0xfac9, 0xfaca, 0xfacb, 0xfacc, 0xfacd, 0xface,
		0xfacf, 0xfad0, 0xfad1, 0xfad2, 0xfad3, 0xfad4, 0xfad5, 0xfad6, 0xfad7, 0xfad8, 0xfad9, 0xfb1d, 0xfb1f, 0xfb2a, 0xfb2b, 0xfb2c, 0xfb2d, 0xfb2e, 0xfb2f, 0xfb30,
		0xfb31, 0xfb32, 0xfb33, 0xfb34, 0xfb35, 0xfb36, 0xfb38, 0xfb39, 0xfb3a, 0xfb3b, 0xfb3c, 0xfb3e, 0xfb40, 0xfb41, 0xfb43, 0xfb44, 0xfb46, 0xfb47, 0xfb48, 0xfb49,
		0xfb4a, 0xfb4b, 0xfb4c, 0xfb4d, 0xfb4e, 0x1d15e, 0x1d15f, 0x1d160, 0x1d161, 0x1d162, 0x1d163, 0x1d164, 0x1d1bb, 0x1d1bc, 0x1d1bd, 0x1d1be, 0x1d1bf, 0x1d1c0, 0x2f800, 0x2f801,
		0x2f802, 0x2f803, 0x2f804, 0x2f805, 0x2f806, 0x2f807, 0x2f808, 0x2f809, 0x2f80a, 0x2f80b, 0x2f80c, 0x2f80d, 0x2f80e, 0x2f80f, 0x2f810, 0x2f811, 0x2f812, 0x2f813, 0x2f814, 0x2f815,
		0x2f816, 0x2f817, 0x2f818, 0x2f819, 0x2f81a, 0x2f81b, 0x2f81c, 0x2f81d, 0x2f81e, 0x2f81f, 0x2f820, 0x2f821, 0x2f822, 0x2f823, 0x2f824, 0x2f825, 0x2f826, 0x2f827, 0x2f828, 0x2f829,
		0x2f82a, 0x2f82b, 0x2f82c, 0x2f82d, 0x2f82e, 0x2f82f, 0x2f830, 0x2f831, 0x2f832, 0x2f833, 0x2f834, 0x2f835, 0x2f836, 0x2f837, 0x2f838, 0x2f839, 0x2f83a, 0x2f83b, 0x2f83c, 0x2f83d,
		0x2f83e, 0x2f83f, 0x2f840, 0x2f841, 0x2f842, 0x2f843, 0x2f844, 0x2f845, 0x2f846, 0x2f847, 0x2f848, 0x2f849, 0x2f84a, 0x2f84b, 0x2f84c, 0x2f84d, 0x2f84e, 0x2f84f, 0x2f850, 0x2f851,
		0x2f852, 0x2f853, 0x2f854, 0x2f855, 0x2f856, 0x2f857, 0x2f858, 0x2f859, 0x2f85a, 0x2f85b, 0x2f85c, 0x2f85d, 0x2f85e, 0x2f85f, 0x2f860, 0x2f861, 0x2f862, 0x2f863, 0x2f864, 0x2f865,
		0x2f866, 0x2f867, 0x2f868, 0x2f869, 0x2f86a, 0x2f86b, 0x2f86c, 0x2f86d, 0x2f86e, 0x2f86f, 0x2f870, 0x2f871, 0x2f872, 0x2f873, 0x2f874, 0x2f875, 0x2f876, 0x2f877, 0x2f878, 0x2f879,
		0x2f87a, 0x2f87b, 0x2f87c, 0x2f87d, 0x2f87e, 0x2f87f, 0x2f880, 0x2f881, 0x2f882, 0x2f883, 0x2f884, 0x2f885, 0x2f886, 0x2f887, 0x2f888, 0x2f889, 0x2f88a, 0x2f88b, 0x2f88c, 0x2f88d,
		0x2f88e, 0x2f88f, 0x2f890, 0x2f891, 0x2f892, 0x2f893, 0x2f894, 0x2f895, 0x2f896, 0x2f897, 0x2f898, 0x2f899, 0x2f89a, 0x2f89b, 0x2f89c, 0x2f89d, 0x2f89e, 0x2f89f, 0x2f8a0, 0x2f8a1,
		0x2f8a2, 0x2f8a3, 0x2f8a4, 0x2f8a5, 0x2f8a6, 0x2f8a7, 0x2f8a8, 0x2f8a9, 0x2f8aa, 0x2f8ab, 0x2f8ac, 0x2f8ad, 0x2f8ae, 0x2f8af, 0x2f8b0, 0x2f8b1, 0x2f8b2, 0x2f8b3, 0x2f8b4, 0x2f8b5,
		0x2f8b6, 0x2f8b7, 0x2f8b8, 0x2f8b9, 0x2f8ba, 0x2f8bb, 0x2f8bc, 0x2f8bd, 0x2f8be, 0x2f8bf, 0x2f8c0, 0x2f8c1, 0x2f8c2, 0x2f8c3, 0x2f8c4, 0x2f8c5, 0x2f8c6, 0x2f8c7, 0x2f8c8, 0x2f8c9,
		0x2f8ca, 0x2f8cb, 0x2f8cc, 0x2f8cd, 0x2f8ce, 0x2f8cf, 0x2f8d0, 0x2f8d1, 0x2f8d2, 0x2f8d3, 0x2f8d4, 0x2f8d5, 0x2f8d6, 0x2f8d7, 0x2f8d8, 0x2f8d9, 0x2f8da, 0x2f8db, 0x2f8dc, 0x2f8dd,
		0x2f8de, 0x2f8df, 0x2f8e0, 0x2f8e1, 0x2f8e2, 0x2f8e3, 0x2f8e4, 0x2f8e5, 0x2f8e6, 0x2f8e7, 0x2f8e8, 0x2f8e9, 0x2f8ea, 0x2f8eb, 0x2f8ec, 0x2f8ed, 0x2f8ee, 0x2f8ef, 0x2f8f0, 0x2f8f1,
		0x2f8f2, 0x2f8f3, 0x2f8f4, 0x2f8f5, 0x2f8f6, 0x2f8f7, 0x2f8f8, 0x2f8f9, 0x2f8fa, 0x2f8fb, 0x2f8fc, 0x2f8fd, 0x2f8fe, 0x2f8ff, 0x2f900, 0x2f901, 0x2f902, 0x2f903, 0x2f904, 0x2f905,
		0x2f906, 0x2f907, 0x2f908, 0x2f909, 0x2f90a, 0x2f90b, 0x2f90c, 0x2f90d, 0x2f90e, 0x2f90f, 0x2f910, 0x2f911, 0x2f912, 0x2f913, 0x2f914, 0x2f915, 0x2f916, 0x2f917, 0x2f918, 0x2f919,
		0x2f91a, 0x2f91b, 0x2f91c, 0x2f91d, 0x2f91e, 0x2f91f, 0x2f920, 0x2f921, 0x2f922, 0x2f923, 0x2f924, 0x2f925, 0x2f926, 0x2f927, 0x2f928, 0x2f929, 0x2f92a, 0x2f92b, 0x2f92c, 0x2f92d,
		0x2f92e, 0x2f92f, 0x2f930, 0x2f931, 0x2f932, 0x2f933, 0x2f934, 0x2f935, 0x2f936, 0x2f937, 0x2f938, 0x2f939, 0x2f93a, 0x2f93b, 0x2f93c, 0x2f93d, 0x2f93e, 0x2f93f, 0x2f940, 0x2f941,
		0x2f942, 0x2f943, 0x2f944, 0x2f945, 0x2f946, 0x2f947, 0x2f948, 0x2f949, 0x2f94a, 0x2f94b, 0x2f94c, 0x2f94d, 0x2f94e, 0x2f94f, 0x2f950, 0x2f951, 0x2f952, 0x2f953, 0x2f954, 0x2f955,
		0x2f956, 0x2f957, 0x2f958, 0x2f959, 0x2f95a, 0x2f95b, 0x2f95c, 0x2f95d, 0x2f95e, 0x2f95f, 0x2f960, 0x2f961, 0x2f962, 0x2f963, 0x2f964, 0x2f965, 0x2f966, 0x2f967, 0x2f968, 0x2f969,
		0x2f96a, 0x2f96b, 0x2f96c, 0x2f96d, 0x2f96e, 0x2f96f, 0x2f970, 0x2f971, 0x2f972, 0x2f973, 0x2f974, 0x2f975, 0x2f976, 0x2f977, 0x2f978, 0x2f979, 0x2f97a, 0x2f97b, 0x2f97c, 0x2f97d,
		0x2f97e, 0x2f97f, 0x2f980, 0x2f981, 0x2f982, 0x2f983, 0x2f984, 0x2f985, 0x2f986, 0x2f987, 0x2f988, 0x2f989, 0x2f98a, 0x2f98b, 0x2f98c, 0x2f98d, 0x2f98e, 0x2f98f, 0x2f990, 0x2f991,
		0x2f992, 0x2f993, 0x2f994, 0x2f995, 0x2f996, 0x2f997, 0x2f998, 0x2f999, 0x2f99a, 0x2f99b, 0x2f99c, 0x2f99d, 0x2f99e, 0x2f99f, 0x2f9a0, 0x2f9a1, 0x2f9a2, 0x2f9a3, 0x2f9a4, 0x2f9a5,
		0x2f9a6, 0x2f9a7, 0x2f9a8, 0x2f9a9, 0x2f9aa, 0x2f9ab, 0x2f9ac, 0x2f9ad, 0x2f9ae, 0x2f9af, 0x2f9b0, 0x2f9b1, 0x2f9b2, 0x2f9b3, 0x2f9b4, 0x2f9b5, 0x2f9b6, 0x2f9b7, 0x2f9b8, 0x2f9b9,
		0x2f9ba, 0x2f9bb, 0x2f9bc, 0x2f9bd, 0x2f9be, 0x2f9bf, 0x2f9c0, 0x2f9c1, 0x2f9c2, 0x2f9c3, 0x2f9c4, 0x2f9c5, 0x2f9c6, 0x2f9c7, 0x2f9c8, 0x2f9c9, 0x2f9ca, 0x2f9cb, 0x2f9cc, 0x2f9cd,
		0x2f9ce, 0x2f9cf, 0x2f9d0, 0x2f9d1, 0x2f9d2, 0x2f9d3, 0x2f9d4, 0x2f9d5, 0x2f9d6, 0x2f9d7, 0x2f9d8, 0x2f9d9, 0x2f9da, 0x2f9db, 0x2f9dc, 0x2f9dd, 0x2f9de, 0x2f9df, 0x2f9e0, 0x2f9e1,
		0x2f9e2, 0x2f9e3, 0x2f9e4, 0x2f9e5, 0x2f9e6, 0x2f9e7, 0x2f9e8, 0x2f9e9, 0x2f9ea, 0x2f9eb, 0x2f9ec, 0x2f9ed, 0x2f9ee, 0x2f9ef, 0x2f9f0, 0x2f9f1, 0x2f9f2, 0x2f9f3, 0x2f9f4, 0x2f9f5,
		0x2f9f6, 0x2f9f7, 0x2f9f8, 0x2f9f9, 0x2f9fa, 0x2f9fb, 0x2f9fc, 0x2f9fd, 0x2f9fe, 0x2f9ff, 0x2fa00, 0x2fa01, 0x2fa02, 0x2fa03, 0x2fa04, 0x2fa05, 0x2fa06, 0x2fa07, 0x2fa08, 0x2fa09,
		0x2fa0a, 0x2fa0b, 0x2fa0c, 0x2fa0d, 0x2fa0e, 0x2fa0f, 0x2fa10, 0x2fa11, 0x2fa12, 0x2fa13, 0x2fa14, 0x2fa15, 0x2fa16, 0x2fa17, 0x2fa18, 0x2fa19, 0x2fa1a, 0x2fa1b, 0x2fa1c, 0x2fa1d,
	);

	define( 'UNFC_REGEX_ALTS_NFC_NOES_MAYBES_REORDERS_U', '\x{300}-\x{34e}\x{350}-\x{36f}\x{374}\x{37e}\x{387}\x{483}-\x{487}\x{591}-\x{5bd}\x{5bf}\x{5c1}\x{5c2}\x{5c4}\x{5c5}\x{5c7}\x{610}-\x{61a}\x{64b}-\x{65f}\x{670}\x{6d6}-\x{6dc}\x{6df}-\x{6e4}\x{6e7}\x{6e8}\x{6ea}-\x{6ed}\x{711}\x{730}-\x{74a}\x{7eb}-\x{7f3}\x{816}-\x{819}\x{81b}-\x{823}\x{825}-\x{827}\x{829}-\x{82d}\x{859}-\x{85b}\x{8d4}-\x{8e1}\x{8e3}-\x{8ff}\x{93c}\x{94d}\x{951}-\x{954}\x{958}-\x{95f}\x{9bc}\x{9be}\x{9cd}\x{9d7}\x{9dc}\x{9dd}\x{9df}\x{a33}\x{a36}\x{a3c}\x{a4d}\x{a59}-\x{a5b}\x{a5e}\x{abc}\x{acd}\x{b3c}\x{b3e}\x{b4d}\x{b56}\x{b57}\x{b5c}\x{b5d}\x{bbe}\x{bcd}\x{bd7}\x{c4d}\x{c55}\x{c56}\x{cbc}\x{cc2}\x{ccd}\x{cd5}\x{cd6}\x{d3e}\x{d4d}\x{d57}\x{dca}\x{dcf}\x{ddf}\x{e38}-\x{e3a}\x{e48}-\x{e4b}\x{eb8}\x{eb9}\x{ec8}-\x{ecb}\x{f18}\x{f19}\x{f35}\x{f37}\x{f39}\x{f43}\x{f4d}\x{f52}\x{f57}\x{f5c}\x{f69}\x{f71}-\x{f76}\x{f78}\x{f7a}-\x{f7d}\x{f80}-\x{f84}\x{f86}\x{f87}\x{f93}\x{f9d}\x{fa2}\x{fa7}\x{fac}\x{fb9}\x{fc6}\x{102e}\x{1037}\x{1039}\x{103a}\x{108d}\x{1161}-\x{1175}\x{11a8}-\x{11c2}\x{135d}-\x{135f}\x{1714}\x{1734}\x{17d2}\x{17dd}\x{18a9}\x{1939}-\x{193b}\x{1a17}\x{1a18}\x{1a60}\x{1a75}-\x{1a7c}\x{1a7f}\x{1ab0}-\x{1abd}\x{1b34}\x{1b35}\x{1b44}\x{1b6b}-\x{1b73}\x{1baa}\x{1bab}\x{1be6}\x{1bf2}\x{1bf3}\x{1c37}\x{1cd0}-\x{1cd2}\x{1cd4}-\x{1ce0}\x{1ce2}-\x{1ce8}\x{1ced}\x{1cf4}\x{1cf8}\x{1cf9}\x{1dc0}-\x{1df5}\x{1dfb}-\x{1dff}\x{1f71}\x{1f73}\x{1f75}\x{1f77}\x{1f79}\x{1f7b}\x{1f7d}\x{1fbb}\x{1fbe}\x{1fc9}\x{1fcb}\x{1fd3}\x{1fdb}\x{1fe3}\x{1feb}\x{1fee}\x{1fef}\x{1ff9}\x{1ffb}\x{1ffd}\x{2000}\x{2001}\x{20d0}-\x{20dc}\x{20e1}\x{20e5}-\x{20f0}\x{2126}\x{212a}\x{212b}\x{2329}\x{232a}\x{2adc}\x{2cef}-\x{2cf1}\x{2d7f}\x{2de0}-\x{2dff}\x{302a}-\x{302f}\x{3099}\x{309a}\x{a66f}\x{a674}-\x{a67d}\x{a69e}\x{a69f}\x{a6f0}\x{a6f1}\x{a806}\x{a8c4}\x{a8e0}-\x{a8f1}\x{a92b}-\x{a92d}\x{a953}\x{a9b3}\x{a9c0}\x{aab0}\x{aab2}-\x{aab4}\x{aab7}\x{aab8}\x{aabe}\x{aabf}\x{aac1}\x{aaf6}\x{abed}\x{f900}-\x{fa0d}\x{fa10}\x{fa12}\x{fa15}-\x{fa1e}\x{fa20}\x{fa22}\x{fa25}\x{fa26}\x{fa2a}-\x{fa6d}\x{fa70}-\x{fad9}\x{fb1d}-\x{fb1f}\x{fb2a}-\x{fb36}\x{fb38}-\x{fb3c}\x{fb3e}\x{fb40}\x{fb41}\x{fb43}\x{fb44}\x{fb46}-\x{fb4e}\x{fe20}-\x{fe2f}\x{101fd}\x{102e0}\x{10376}-\x{1037a}\x{10a0d}\x{10a0f}\x{10a38}-\x{10a3a}\x{10a3f}\x{10ae5}\x{10ae6}\x{11046}\x{1107f}\x{110b9}\x{110ba}\x{11100}-\x{11102}\x{11127}\x{11133}\x{11134}\x{11173}\x{111c0}\x{111ca}\x{11235}\x{11236}\x{112e9}\x{112ea}\x{1133c}\x{1133e}\x{1134d}\x{11357}\x{11366}-\x{1136c}\x{11370}-\x{11374}\x{11442}\x{11446}\x{114b0}\x{114ba}\x{114bd}\x{114c2}\x{114c3}\x{115af}\x{115bf}\x{115c0}\x{1163f}\x{116b6}\x{116b7}\x{1172b}\x{11c3f}\x{16af0}-\x{16af4}\x{16b30}-\x{16b36}\x{1bc9e}\x{1d15e}-\x{1d169}\x{1d16d}-\x{1d172}\x{1d17b}-\x{1d182}\x{1d185}-\x{1d18b}\x{1d1aa}-\x{1d1ad}\x{1d1bb}-\x{1d1c0}\x{1d242}-\x{1d244}\x{1e000}-\x{1e006}\x{1e008}-\x{1e018}\x{1e01b}-\x{1e021}\x{1e023}\x{1e024}\x{1e026}-\x{1e02a}\x{1e8d0}-\x{1e8d6}\x{1e944}-\x{1e94a}\x{2f800}-\x{2fa1d}' );
	define( 'UNFC_REGEX_NFC_NOES_MAYBES_REORDERS_U', '/[' . UNFC_REGEX_ALTS_NFC_NOES_MAYBES_REORDERS_U . ']/u' );

	global $unfc_nfc_noes_maybes_reorders;
	$unfc_nfc_noes_maybes_reorders = array( // 2001 codepoints
		0x300, 0x301, 0x302, 0x303, 0x304, 0x305, 0x306, 0x307, 0x308, 0x309, 0x30a, 0x30b, 0x30c, 0x30d, 0x30e, 0x30f, 0x310, 0x311, 0x312, 0x313,
		0x314, 0x315, 0x316, 0x317, 0x318, 0x319, 0x31a, 0x31b, 0x31c, 0x31d, 0x31e, 0x31f, 0x320, 0x321, 0x322, 0x323, 0x324, 0x325, 0x326, 0x327,
		0x328, 0x329, 0x32a, 0x32b, 0x32c, 0x32d, 0x32e, 0x32f, 0x330, 0x331, 0x332, 0x333, 0x334, 0x335, 0x336, 0x337, 0x338, 0x339, 0x33a, 0x33b,
		0x33c, 0x33d, 0x33e, 0x33f, 0x340, 0x341, 0x342, 0x343, 0x344, 0x345, 0x346, 0x347, 0x348, 0x349, 0x34a, 0x34b, 0x34c, 0x34d, 0x34e, 0x350,
		0x351, 0x352, 0x353, 0x354, 0x355, 0x356, 0x357, 0x358, 0x359, 0x35a, 0x35b, 0x35c, 0x35d, 0x35e, 0x35f, 0x360, 0x361, 0x362, 0x363, 0x364,
		0x365, 0x366, 0x367, 0x368, 0x369, 0x36a, 0x36b, 0x36c, 0x36d, 0x36e, 0x36f, 0x374, 0x37e, 0x387, 0x483, 0x484, 0x485, 0x486, 0x487, 0x591,
		0x592, 0x593, 0x594, 0x595, 0x596, 0x597, 0x598, 0x599, 0x59a, 0x59b, 0x59c, 0x59d, 0x59e, 0x59f, 0x5a0, 0x5a1, 0x5a2, 0x5a3, 0x5a4, 0x5a5,
		0x5a6, 0x5a7, 0x5a8, 0x5a9, 0x5aa, 0x5ab, 0x5ac, 0x5ad, 0x5ae, 0x5af, 0x5b0, 0x5b1, 0x5b2, 0x5b3, 0x5b4, 0x5b5, 0x5b6, 0x5b7, 0x5b8, 0x5b9,
		0x5ba, 0x5bb, 0x5bc, 0x5bd, 0x5bf, 0x5c1, 0x5c2, 0x5c4, 0x5c5, 0x5c7, 0x610, 0x611, 0x612, 0x613, 0x614, 0x615, 0x616, 0x617, 0x618, 0x619,
		0x61a, 0x64b, 0x64c, 0x64d, 0x64e, 0x64f, 0x650, 0x651, 0x652, 0x653, 0x654, 0x655, 0x656, 0x657, 0x658, 0x659, 0x65a, 0x65b, 0x65c, 0x65d,
		0x65e, 0x65f, 0x670, 0x6d6, 0x6d7, 0x6d8, 0x6d9, 0x6da, 0x6db, 0x6dc, 0x6df, 0x6e0, 0x6e1, 0x6e2, 0x6e3, 0x6e4, 0x6e7, 0x6e8, 0x6ea, 0x6eb,
		0x6ec, 0x6ed, 0x711, 0x730, 0x731, 0x732, 0x733, 0x734, 0x735, 0x736, 0x737, 0x738, 0x739, 0x73a, 0x73b, 0x73c, 0x73d, 0x73e, 0x73f, 0x740,
		0x741, 0x742, 0x743, 0x744, 0x745, 0x746, 0x747, 0x748, 0x749, 0x74a, 0x7eb, 0x7ec, 0x7ed, 0x7ee, 0x7ef, 0x7f0, 0x7f1, 0x7f2, 0x7f3, 0x816,
		0x817, 0x818, 0x819, 0x81b, 0x81c, 0x81d, 0x81e, 0x81f, 0x820, 0x821, 0x822, 0x823, 0x825, 0x826, 0x827, 0x829, 0x82a, 0x82b, 0x82c, 0x82d,
		0x859, 0x85a, 0x85b, 0x8d4, 0x8d5, 0x8d6, 0x8d7, 0x8d8, 0x8d9, 0x8da, 0x8db, 0x8dc, 0x8dd, 0x8de, 0x8df, 0x8e0, 0x8e1, 0x8e3, 0x8e4, 0x8e5,
		0x8e6, 0x8e7, 0x8e8, 0x8e9, 0x8ea, 0x8eb, 0x8ec, 0x8ed, 0x8ee, 0x8ef, 0x8f0, 0x8f1, 0x8f2, 0x8f3, 0x8f4, 0x8f5, 0x8f6, 0x8f7, 0x8f8, 0x8f9,
		0x8fa, 0x8fb, 0x8fc, 0x8fd, 0x8fe, 0x8ff, 0x93c, 0x94d, 0x951, 0x952, 0x953, 0x954, 0x958, 0x959, 0x95a, 0x95b, 0x95c, 0x95d, 0x95e, 0x95f,
		0x9bc, 0x9be, 0x9cd, 0x9d7, 0x9dc, 0x9dd, 0x9df, 0xa33, 0xa36, 0xa3c, 0xa4d, 0xa59, 0xa5a, 0xa5b, 0xa5e, 0xabc, 0xacd, 0xb3c, 0xb3e, 0xb4d,
		0xb56, 0xb57, 0xb5c, 0xb5d, 0xbbe, 0xbcd, 0xbd7, 0xc4d, 0xc55, 0xc56, 0xcbc, 0xcc2, 0xccd, 0xcd5, 0xcd6, 0xd3e, 0xd4d, 0xd57, 0xdca, 0xdcf,
		0xddf, 0xe38, 0xe39, 0xe3a, 0xe48, 0xe49, 0xe4a, 0xe4b, 0xeb8, 0xeb9, 0xec8, 0xec9, 0xeca, 0xecb, 0xf18, 0xf19, 0xf35, 0xf37, 0xf39, 0xf43,
		0xf4d, 0xf52, 0xf57, 0xf5c, 0xf69, 0xf71, 0xf72, 0xf73, 0xf74, 0xf75, 0xf76, 0xf78, 0xf7a, 0xf7b, 0xf7c, 0xf7d, 0xf80, 0xf81, 0xf82, 0xf83,
		0xf84, 0xf86, 0xf87, 0xf93, 0xf9d, 0xfa2, 0xfa7, 0xfac, 0xfb9, 0xfc6, 0x102e, 0x1037, 0x1039, 0x103a, 0x108d, 0x1161, 0x1162, 0x1163, 0x1164, 0x1165,
		0x1166, 0x1167, 0x1168, 0x1169, 0x116a, 0x116b, 0x116c, 0x116d, 0x116e, 0x116f, 0x1170, 0x1171, 0x1172, 0x1173, 0x1174, 0x1175, 0x11a8, 0x11a9, 0x11aa, 0x11ab,
		0x11ac, 0x11ad, 0x11ae, 0x11af, 0x11b0, 0x11b1, 0x11b2, 0x11b3, 0x11b4, 0x11b5, 0x11b6, 0x11b7, 0x11b8, 0x11b9, 0x11ba, 0x11bb, 0x11bc, 0x11bd, 0x11be, 0x11bf,
		0x11c0, 0x11c1, 0x11c2, 0x135d, 0x135e, 0x135f, 0x1714, 0x1734, 0x17d2, 0x17dd, 0x18a9, 0x1939, 0x193a, 0x193b, 0x1a17, 0x1a18, 0x1a60, 0x1a75, 0x1a76, 0x1a77,
		0x1a78, 0x1a79, 0x1a7a, 0x1a7b, 0x1a7c, 0x1a7f, 0x1ab0, 0x1ab1, 0x1ab2, 0x1ab3, 0x1ab4, 0x1ab5, 0x1ab6, 0x1ab7, 0x1ab8, 0x1ab9, 0x1aba, 0x1abb, 0x1abc, 0x1abd,
		0x1b34, 0x1b35, 0x1b44, 0x1b6b, 0x1b6c, 0x1b6d, 0x1b6e, 0x1b6f, 0x1b70, 0x1b71, 0x1b72, 0x1b73, 0x1baa, 0x1bab, 0x1be6, 0x1bf2, 0x1bf3, 0x1c37, 0x1cd0, 0x1cd1,
		0x1cd2, 0x1cd4, 0x1cd5, 0x1cd6, 0x1cd7, 0x1cd8, 0x1cd9, 0x1cda, 0x1cdb, 0x1cdc, 0x1cdd, 0x1cde, 0x1cdf, 0x1ce0, 0x1ce2, 0x1ce3, 0x1ce4, 0x1ce5, 0x1ce6, 0x1ce7,
		0x1ce8, 0x1ced, 0x1cf4, 0x1cf8, 0x1cf9, 0x1dc0, 0x1dc1, 0x1dc2, 0x1dc3, 0x1dc4, 0x1dc5, 0x1dc6, 0x1dc7, 0x1dc8, 0x1dc9, 0x1dca, 0x1dcb, 0x1dcc, 0x1dcd, 0x1dce,
		0x1dcf, 0x1dd0, 0x1dd1, 0x1dd2, 0x1dd3, 0x1dd4, 0x1dd5, 0x1dd6, 0x1dd7, 0x1dd8, 0x1dd9, 0x1dda, 0x1ddb, 0x1ddc, 0x1ddd, 0x1dde, 0x1ddf, 0x1de0, 0x1de1, 0x1de2,
		0x1de3, 0x1de4, 0x1de5, 0x1de6, 0x1de7, 0x1de8, 0x1de9, 0x1dea, 0x1deb, 0x1dec, 0x1ded, 0x1dee, 0x1def, 0x1df0, 0x1df1, 0x1df2, 0x1df3, 0x1df4, 0x1df5, 0x1dfb,
		0x1dfc, 0x1dfd, 0x1dfe, 0x1dff, 0x1f71, 0x1f73, 0x1f75, 0x1f77, 0x1f79, 0x1f7b, 0x1f7d, 0x1fbb, 0x1fbe, 0x1fc9, 0x1fcb, 0x1fd3, 0x1fdb, 0x1fe3, 0x1feb, 0x1fee,
		0x1fef, 0x1ff9, 0x1ffb, 0x1ffd, 0x2000, 0x2001, 0x20d0, 0x20d1, 0x20d2, 0x20d3, 0x20d4, 0x20d5, 0x20d6, 0x20d7, 0x20d8, 0x20d9, 0x20da, 0x20db, 0x20dc, 0x20e1,
		0x20e5, 0x20e6, 0x20e7, 0x20e8, 0x20e9, 0x20ea, 0x20eb, 0x20ec, 0x20ed, 0x20ee, 0x20ef, 0x20f0, 0x2126, 0x212a, 0x212b, 0x2329, 0x232a, 0x2adc, 0x2cef, 0x2cf0,
		0x2cf1, 0x2d7f, 0x2de0, 0x2de1, 0x2de2, 0x2de3, 0x2de4, 0x2de5, 0x2de6, 0x2de7, 0x2de8, 0x2de9, 0x2dea, 0x2deb, 0x2dec, 0x2ded, 0x2dee, 0x2def, 0x2df0, 0x2df1,
		0x2df2, 0x2df3, 0x2df4, 0x2df5, 0x2df6, 0x2df7, 0x2df8, 0x2df9, 0x2dfa, 0x2dfb, 0x2dfc, 0x2dfd, 0x2dfe, 0x2dff, 0x302a, 0x302b, 0x302c, 0x302d, 0x302e, 0x302f,
		0x3099, 0x309a, 0xa66f, 0xa674, 0xa675, 0xa676, 0xa677, 0xa678, 0xa679, 0xa67a, 0xa67b, 0xa67c, 0xa67d, 0xa69e, 0xa69f, 0xa6f0, 0xa6f1, 0xa806, 0xa8c4, 0xa8e0,
		0xa8e1, 0xa8e2, 0xa8e3, 0xa8e4, 0xa8e5, 0xa8e6, 0xa8e7, 0xa8e8, 0xa8e9, 0xa8ea, 0xa8eb, 0xa8ec, 0xa8ed, 0xa8ee, 0xa8ef, 0xa8f0, 0xa8f1, 0xa92b, 0xa92c, 0xa92d,
		0xa953, 0xa9b3, 0xa9c0, 0xaab0, 0xaab2, 0xaab3, 0xaab4, 0xaab7, 0xaab8, 0xaabe, 0xaabf, 0xaac1, 0xaaf6, 0xabed, 0xf900, 0xf901, 0xf902, 0xf903, 0xf904, 0xf905,
		0xf906, 0xf907, 0xf908, 0xf909, 0xf90a, 0xf90b, 0xf90c, 0xf90d, 0xf90e, 0xf90f, 0xf910, 0xf911, 0xf912, 0xf913, 0xf914, 0xf915, 0xf916, 0xf917, 0xf918, 0xf919,
		0xf91a, 0xf91b, 0xf91c, 0xf91d, 0xf91e, 0xf91f, 0xf920, 0xf921, 0xf922, 0xf923, 0xf924, 0xf925, 0xf926, 0xf927, 0xf928, 0xf929, 0xf92a, 0xf92b, 0xf92c, 0xf92d,
		0xf92e, 0xf92f, 0xf930, 0xf931, 0xf932, 0xf933, 0xf934, 0xf935, 0xf936, 0xf937, 0xf938, 0xf939, 0xf93a, 0xf93b, 0xf93c, 0xf93d, 0xf93e, 0xf93f, 0xf940, 0xf941,
		0xf942, 0xf943, 0xf944, 0xf945, 0xf946, 0xf947, 0xf948, 0xf949, 0xf94a, 0xf94b, 0xf94c, 0xf94d, 0xf94e, 0xf94f, 0xf950, 0xf951, 0xf952, 0xf953, 0xf954, 0xf955,
		0xf956, 0xf957, 0xf958, 0xf959, 0xf95a, 0xf95b, 0xf95c, 0xf95d, 0xf95e, 0xf95f, 0xf960, 0xf961, 0xf962, 0xf963, 0xf964, 0xf965, 0xf966, 0xf967, 0xf968, 0xf969,
		0xf96a, 0xf96b, 0xf96c, 0xf96d, 0xf96e, 0xf96f, 0xf970, 0xf971, 0xf972, 0xf973, 0xf974, 0xf975, 0xf976, 0xf977, 0xf978, 0xf979, 0xf97a, 0xf97b, 0xf97c, 0xf97d,
		0xf97e, 0xf97f, 0xf980, 0xf981, 0xf982, 0xf983, 0xf984, 0xf985, 0xf986, 0xf987, 0xf988, 0xf989, 0xf98a, 0xf98b, 0xf98c, 0xf98d, 0xf98e, 0xf98f, 0xf990, 0xf991,
		0xf992, 0xf993, 0xf994, 0xf995, 0xf996, 0xf997, 0xf998, 0xf999, 0xf99a, 0xf99b, 0xf99c, 0xf99d, 0xf99e, 0xf99f, 0xf9a0, 0xf9a1, 0xf9a2, 0xf9a3, 0xf9a4, 0xf9a5,
		0xf9a6, 0xf9a7, 0xf9a8, 0xf9a9, 0xf9aa, 0xf9ab, 0xf9ac, 0xf9ad, 0xf9ae, 0xf9af, 0xf9b0, 0xf9b1, 0xf9b2, 0xf9b3, 0xf9b4, 0xf9b5, 0xf9b6, 0xf9b7, 0xf9b8, 0xf9b9,
		0xf9ba, 0xf9bb, 0xf9bc, 0xf9bd, 0xf9be, 0xf9bf, 0xf9c0, 0xf9c1, 0xf9c2, 0xf9c3, 0xf9c4, 0xf9c5, 0xf9c6, 0xf9c7, 0xf9c8, 0xf9c9, 0xf9ca, 0xf9cb, 0xf9cc, 0xf9cd,
		0xf9ce, 0xf9cf, 0xf9d0, 0xf9d1, 0xf9d2, 0xf9d3, 0xf9d4, 0xf9d5, 0xf9d6, 0xf9d7, 0xf9d8, 0xf9d9, 0xf9da, 0xf9db, 0xf9dc, 0xf9dd, 0xf9de, 0xf9df, 0xf9e0, 0xf9e1,
		0xf9e2, 0xf9e3, 0xf9e4, 0xf9e5, 0xf9e6, 0xf9e7, 0xf9e8, 0xf9e9, 0xf9ea, 0xf9eb, 0xf9ec, 0xf9ed, 0xf9ee, 0xf9ef, 0xf9f0, 0xf9f1, 0xf9f2, 0xf9f3, 0xf9f4, 0xf9f5,
		0xf9f6, 0xf9f7, 0xf9f8, 0xf9f9, 0xf9fa, 0xf9fb, 0xf9fc, 0xf9fd, 0xf9fe, 0xf9ff, 0xfa00, 0xfa01, 0xfa02, 0xfa03, 0xfa04, 0xfa05, 0xfa06, 0xfa07, 0xfa08, 0xfa09,
		0xfa0a, 0xfa0b, 0xfa0c, 0xfa0d, 0xfa10, 0xfa12, 0xfa15, 0xfa16, 0xfa17, 0xfa18, 0xfa19, 0xfa1a, 0xfa1b, 0xfa1c, 0xfa1d, 0xfa1e, 0xfa20, 0xfa22, 0xfa25, 0xfa26,
		0xfa2a, 0xfa2b, 0xfa2c, 0xfa2d, 0xfa2e, 0xfa2f, 0xfa30, 0xfa31, 0xfa32, 0xfa33, 0xfa34, 0xfa35, 0xfa36, 0xfa37, 0xfa38, 0xfa39, 0xfa3a, 0xfa3b, 0xfa3c, 0xfa3d,
		0xfa3e, 0xfa3f, 0xfa40, 0xfa41, 0xfa42, 0xfa43, 0xfa44, 0xfa45, 0xfa46, 0xfa47, 0xfa48, 0xfa49, 0xfa4a, 0xfa4b, 0xfa4c, 0xfa4d, 0xfa4e, 0xfa4f, 0xfa50, 0xfa51,
		0xfa52, 0xfa53, 0xfa54, 0xfa55, 0xfa56, 0xfa57, 0xfa58, 0xfa59, 0xfa5a, 0xfa5b, 0xfa5c, 0xfa5d, 0xfa5e, 0xfa5f, 0xfa60, 0xfa61, 0xfa62, 0xfa63, 0xfa64, 0xfa65,
		0xfa66, 0xfa67, 0xfa68, 0xfa69, 0xfa6a, 0xfa6b, 0xfa6c, 0xfa6d, 0xfa70, 0xfa71, 0xfa72, 0xfa73, 0xfa74, 0xfa75, 0xfa76, 0xfa77, 0xfa78, 0xfa79, 0xfa7a, 0xfa7b,
		0xfa7c, 0xfa7d, 0xfa7e, 0xfa7f, 0xfa80, 0xfa81, 0xfa82, 0xfa83, 0xfa84, 0xfa85, 0xfa86, 0xfa87, 0xfa88, 0xfa89, 0xfa8a, 0xfa8b, 0xfa8c, 0xfa8d, 0xfa8e, 0xfa8f,
		0xfa90, 0xfa91, 0xfa92, 0xfa93, 0xfa94, 0xfa95, 0xfa96, 0xfa97, 0xfa98, 0xfa99, 0xfa9a, 0xfa9b, 0xfa9c, 0xfa9d, 0xfa9e, 0xfa9f, 0xfaa0, 0xfaa1, 0xfaa2, 0xfaa3,
		0xfaa4, 0xfaa5, 0xfaa6, 0xfaa7, 0xfaa8, 0xfaa9, 0xfaaa, 0xfaab, 0xfaac, 0xfaad, 0xfaae, 0xfaaf, 0xfab0, 0xfab1, 0xfab2, 0xfab3, 0xfab4, 0xfab5, 0xfab6, 0xfab7,
		0xfab8, 0xfab9, 0xfaba, 0xfabb, 0xfabc, 0xfabd, 0xfabe, 0xfabf, 0xfac0, 0xfac1, 0xfac2, 0xfac3, 0xfac4, 0xfac5, 0xfac6, 0xfac7, 0xfac8, 0xfac9, 0xfaca, 0xfacb,
		0xfacc, 0xfacd, 0xface, 0xfacf, 0xfad0, 0xfad1, 0xfad2, 0xfad3, 0xfad4, 0xfad5, 0xfad6, 0xfad7, 0xfad8, 0xfad9, 0xfb1d, 0xfb1e, 0xfb1f, 0xfb2a, 0xfb2b, 0xfb2c,
		0xfb2d, 0xfb2e, 0xfb2f, 0xfb30, 0xfb31, 0xfb32, 0xfb33, 0xfb34, 0xfb35, 0xfb36, 0xfb38, 0xfb39, 0xfb3a, 0xfb3b, 0xfb3c, 0xfb3e, 0xfb40, 0xfb41, 0xfb43, 0xfb44,
		0xfb46, 0xfb47, 0xfb48, 0xfb49, 0xfb4a, 0xfb4b, 0xfb4c, 0xfb4d, 0xfb4e, 0xfe20, 0xfe21, 0xfe22, 0xfe23, 0xfe24, 0xfe25, 0xfe26, 0xfe27, 0xfe28, 0xfe29, 0xfe2a,
		0xfe2b, 0xfe2c, 0xfe2d, 0xfe2e, 0xfe2f, 0x101fd, 0x102e0, 0x10376, 0x10377, 0x10378, 0x10379, 0x1037a, 0x10a0d, 0x10a0f, 0x10a38, 0x10a39, 0x10a3a, 0x10a3f, 0x10ae5, 0x10ae6,
		0x11046, 0x1107f, 0x110b9, 0x110ba, 0x11100, 0x11101, 0x11102, 0x11127, 0x11133, 0x11134, 0x11173, 0x111c0, 0x111ca, 0x11235, 0x11236, 0x112e9, 0x112ea, 0x1133c, 0x1133e, 0x1134d,
		0x11357, 0x11366, 0x11367, 0x11368, 0x11369, 0x1136a, 0x1136b, 0x1136c, 0x11370, 0x11371, 0x11372, 0x11373, 0x11374, 0x11442, 0x11446, 0x114b0, 0x114ba, 0x114bd, 0x114c2, 0x114c3,
		0x115af, 0x115bf, 0x115c0, 0x1163f, 0x116b6, 0x116b7, 0x1172b, 0x11c3f, 0x16af0, 0x16af1, 0x16af2, 0x16af3, 0x16af4, 0x16b30, 0x16b31, 0x16b32, 0x16b33, 0x16b34, 0x16b35, 0x16b36,
		0x1bc9e, 0x1d15e, 0x1d15f, 0x1d160, 0x1d161, 0x1d162, 0x1d163, 0x1d164, 0x1d165, 0x1d166, 0x1d167, 0x1d168, 0x1d169, 0x1d16d, 0x1d16e, 0x1d16f, 0x1d170, 0x1d171, 0x1d172, 0x1d17b,
		0x1d17c, 0x1d17d, 0x1d17e, 0x1d17f, 0x1d180, 0x1d181, 0x1d182, 0x1d185, 0x1d186, 0x1d187, 0x1d188, 0x1d189, 0x1d18a, 0x1d18b, 0x1d1aa, 0x1d1ab, 0x1d1ac, 0x1d1ad, 0x1d1bb, 0x1d1bc,
		0x1d1bd, 0x1d1be, 0x1d1bf, 0x1d1c0, 0x1d242, 0x1d243, 0x1d244, 0x1e000, 0x1e001, 0x1e002, 0x1e003, 0x1e004, 0x1e005, 0x1e006, 0x1e008, 0x1e009, 0x1e00a, 0x1e00b, 0x1e00c, 0x1e00d,
		0x1e00e, 0x1e00f, 0x1e010, 0x1e011, 0x1e012, 0x1e013, 0x1e014, 0x1e015, 0x1e016, 0x1e017, 0x1e018, 0x1e01b, 0x1e01c, 0x1e01d, 0x1e01e, 0x1e01f, 0x1e020, 0x1e021, 0x1e023, 0x1e024,
		0x1e026, 0x1e027, 0x1e028, 0x1e029, 0x1e02a, 0x1e8d0, 0x1e8d1, 0x1e8d2, 0x1e8d3, 0x1e8d4, 0x1e8d5, 0x1e8d6, 0x1e944, 0x1e945, 0x1e946, 0x1e947, 0x1e948, 0x1e949, 0x1e94a, 0x2f800,
		0x2f801, 0x2f802, 0x2f803, 0x2f804, 0x2f805, 0x2f806, 0x2f807, 0x2f808, 0x2f809, 0x2f80a, 0x2f80b, 0x2f80c, 0x2f80d, 0x2f80e, 0x2f80f, 0x2f810, 0x2f811, 0x2f812, 0x2f813, 0x2f814,
		0x2f815, 0x2f816, 0x2f817, 0x2f818, 0x2f819, 0x2f81a, 0x2f81b, 0x2f81c, 0x2f81d, 0x2f81e, 0x2f81f, 0x2f820, 0x2f821, 0x2f822, 0x2f823, 0x2f824, 0x2f825, 0x2f826, 0x2f827, 0x2f828,
		0x2f829, 0x2f82a, 0x2f82b, 0x2f82c, 0x2f82d, 0x2f82e, 0x2f82f, 0x2f830, 0x2f831, 0x2f832, 0x2f833, 0x2f834, 0x2f835, 0x2f836, 0x2f837, 0x2f838, 0x2f839, 0x2f83a, 0x2f83b, 0x2f83c,
		0x2f83d, 0x2f83e, 0x2f83f, 0x2f840, 0x2f841, 0x2f842, 0x2f843, 0x2f844, 0x2f845, 0x2f846, 0x2f847, 0x2f848, 0x2f849, 0x2f84a, 0x2f84b, 0x2f84c, 0x2f84d, 0x2f84e, 0x2f84f, 0x2f850,
		0x2f851, 0x2f852, 0x2f853, 0x2f854, 0x2f855, 0x2f856, 0x2f857, 0x2f858, 0x2f859, 0x2f85a, 0x2f85b, 0x2f85c, 0x2f85d, 0x2f85e, 0x2f85f, 0x2f860, 0x2f861, 0x2f862, 0x2f863, 0x2f864,
		0x2f865, 0x2f866, 0x2f867, 0x2f868, 0x2f869, 0x2f86a, 0x2f86b, 0x2f86c, 0x2f86d, 0x2f86e, 0x2f86f, 0x2f870, 0x2f871, 0x2f872, 0x2f873, 0x2f874, 0x2f875, 0x2f876, 0x2f877, 0x2f878,
		0x2f879, 0x2f87a, 0x2f87b, 0x2f87c, 0x2f87d, 0x2f87e, 0x2f87f, 0x2f880, 0x2f881, 0x2f882, 0x2f883, 0x2f884, 0x2f885, 0x2f886, 0x2f887, 0x2f888, 0x2f889, 0x2f88a, 0x2f88b, 0x2f88c,
		0x2f88d, 0x2f88e, 0x2f88f, 0x2f890, 0x2f891, 0x2f892, 0x2f893, 0x2f894, 0x2f895, 0x2f896, 0x2f897, 0x2f898, 0x2f899, 0x2f89a, 0x2f89b, 0x2f89c, 0x2f89d, 0x2f89e, 0x2f89f, 0x2f8a0,
		0x2f8a1, 0x2f8a2, 0x2f8a3, 0x2f8a4, 0x2f8a5, 0x2f8a6, 0x2f8a7, 0x2f8a8, 0x2f8a9, 0x2f8aa, 0x2f8ab, 0x2f8ac, 0x2f8ad, 0x2f8ae, 0x2f8af, 0x2f8b0, 0x2f8b1, 0x2f8b2, 0x2f8b3, 0x2f8b4,
		0x2f8b5, 0x2f8b6, 0x2f8b7, 0x2f8b8, 0x2f8b9, 0x2f8ba, 0x2f8bb, 0x2f8bc, 0x2f8bd, 0x2f8be, 0x2f8bf, 0x2f8c0, 0x2f8c1, 0x2f8c2, 0x2f8c3, 0x2f8c4, 0x2f8c5, 0x2f8c6, 0x2f8c7, 0x2f8c8,
		0x2f8c9, 0x2f8ca, 0x2f8cb, 0x2f8cc, 0x2f8cd, 0x2f8ce, 0x2f8cf, 0x2f8d0, 0x2f8d1, 0x2f8d2, 0x2f8d3, 0x2f8d4, 0x2f8d5, 0x2f8d6, 0x2f8d7, 0x2f8d8, 0x2f8d9, 0x2f8da, 0x2f8db, 0x2f8dc,
		0x2f8dd, 0x2f8de, 0x2f8df, 0x2f8e0, 0x2f8e1, 0x2f8e2, 0x2f8e3, 0x2f8e4, 0x2f8e5, 0x2f8e6, 0x2f8e7, 0x2f8e8, 0x2f8e9, 0x2f8ea, 0x2f8eb, 0x2f8ec, 0x2f8ed, 0x2f8ee, 0x2f8ef, 0x2f8f0,
		0x2f8f1, 0x2f8f2, 0x2f8f3, 0x2f8f4, 0x2f8f5, 0x2f8f6, 0x2f8f7, 0x2f8f8, 0x2f8f9, 0x2f8fa, 0x2f8fb, 0x2f8fc, 0x2f8fd, 0x2f8fe, 0x2f8ff, 0x2f900, 0x2f901, 0x2f902, 0x2f903, 0x2f904,
		0x2f905, 0x2f906, 0x2f907, 0x2f908, 0x2f909, 0x2f90a, 0x2f90b, 0x2f90c, 0x2f90d, 0x2f90e, 0x2f90f, 0x2f910, 0x2f911, 0x2f912, 0x2f913, 0x2f914, 0x2f915, 0x2f916, 0x2f917, 0x2f918,
		0x2f919, 0x2f91a, 0x2f91b, 0x2f91c, 0x2f91d, 0x2f91e, 0x2f91f, 0x2f920, 0x2f921, 0x2f922, 0x2f923, 0x2f924, 0x2f925, 0x2f926, 0x2f927, 0x2f928, 0x2f929, 0x2f92a, 0x2f92b, 0x2f92c,
		0x2f92d, 0x2f92e, 0x2f92f, 0x2f930, 0x2f931, 0x2f932, 0x2f933, 0x2f934, 0x2f935, 0x2f936, 0x2f937, 0x2f938, 0x2f939, 0x2f93a, 0x2f93b, 0x2f93c, 0x2f93d, 0x2f93e, 0x2f93f, 0x2f940,
		0x2f941, 0x2f942, 0x2f943, 0x2f944, 0x2f945, 0x2f946, 0x2f947, 0x2f948, 0x2f949, 0x2f94a, 0x2f94b, 0x2f94c, 0x2f94d, 0x2f94e, 0x2f94f, 0x2f950, 0x2f951, 0x2f952, 0x2f953, 0x2f954,
		0x2f955, 0x2f956, 0x2f957, 0x2f958, 0x2f959, 0x2f95a, 0x2f95b, 0x2f95c, 0x2f95d, 0x2f95e, 0x2f95f, 0x2f960, 0x2f961, 0x2f962, 0x2f963, 0x2f964, 0x2f965, 0x2f966, 0x2f967, 0x2f968,
		0x2f969, 0x2f96a, 0x2f96b, 0x2f96c, 0x2f96d, 0x2f96e, 0x2f96f, 0x2f970, 0x2f971, 0x2f972, 0x2f973, 0x2f974, 0x2f975, 0x2f976, 0x2f977, 0x2f978, 0x2f979, 0x2f97a, 0x2f97b, 0x2f97c,
		0x2f97d, 0x2f97e, 0x2f97f, 0x2f980, 0x2f981, 0x2f982, 0x2f983, 0x2f984, 0x2f985, 0x2f986, 0x2f987, 0x2f988, 0x2f989, 0x2f98a, 0x2f98b, 0x2f98c, 0x2f98d, 0x2f98e, 0x2f98f, 0x2f990,
		0x2f991, 0x2f992, 0x2f993, 0x2f994, 0x2f995, 0x2f996, 0x2f997, 0x2f998, 0x2f999, 0x2f99a, 0x2f99b, 0x2f99c, 0x2f99d, 0x2f99e, 0x2f99f, 0x2f9a0, 0x2f9a1, 0x2f9a2, 0x2f9a3, 0x2f9a4,
		0x2f9a5, 0x2f9a6, 0x2f9a7, 0x2f9a8, 0x2f9a9, 0x2f9aa, 0x2f9ab, 0x2f9ac, 0x2f9ad, 0x2f9ae, 0x2f9af, 0x2f9b0, 0x2f9b1, 0x2f9b2, 0x2f9b3, 0x2f9b4, 0x2f9b5, 0x2f9b6, 0x2f9b7, 0x2f9b8,
		0x2f9b9, 0x2f9ba, 0x2f9bb, 0x2f9bc, 0x2f9bd, 0x2f9be, 0x2f9bf, 0x2f9c0, 0x2f9c1, 0x2f9c2, 0x2f9c3, 0x2f9c4, 0x2f9c5, 0x2f9c6, 0x2f9c7, 0x2f9c8, 0x2f9c9, 0x2f9ca, 0x2f9cb, 0x2f9cc,
		0x2f9cd, 0x2f9ce, 0x2f9cf, 0x2f9d0, 0x2f9d1, 0x2f9d2, 0x2f9d3, 0x2f9d4, 0x2f9d5, 0x2f9d6, 0x2f9d7, 0x2f9d8, 0x2f9d9, 0x2f9da, 0x2f9db, 0x2f9dc, 0x2f9dd, 0x2f9de, 0x2f9df, 0x2f9e0,
		0x2f9e1, 0x2f9e2, 0x2f9e3, 0x2f9e4, 0x2f9e5, 0x2f9e6, 0x2f9e7, 0x2f9e8, 0x2f9e9, 0x2f9ea, 0x2f9eb, 0x2f9ec, 0x2f9ed, 0x2f9ee, 0x2f9ef, 0x2f9f0, 0x2f9f1, 0x2f9f2, 0x2f9f3, 0x2f9f4,
		0x2f9f5, 0x2f9f6, 0x2f9f7, 0x2f9f8, 0x2f9f9, 0x2f9fa, 0x2f9fb, 0x2f9fc, 0x2f9fd, 0x2f9fe, 0x2f9ff, 0x2fa00, 0x2fa01, 0x2fa02, 0x2fa03, 0x2fa04, 0x2fa05, 0x2fa06, 0x2fa07, 0x2fa08,
		0x2fa09, 0x2fa0a, 0x2fa0b, 0x2fa0c, 0x2fa0d, 0x2fa0e, 0x2fa0f, 0x2fa10, 0x2fa11, 0x2fa12, 0x2fa13, 0x2fa14, 0x2fa15, 0x2fa16, 0x2fa17, 0x2fa18, 0x2fa19, 0x2fa1a, 0x2fa1b, 0x2fa1c,
		0x2fa1d,
	);
}
