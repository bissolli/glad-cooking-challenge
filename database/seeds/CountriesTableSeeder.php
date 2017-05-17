<?php

use CookingChallenge\Model\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->store(1, 'Not specified', 'nsp', 'NSP');
        $this->store(2, 'Afghanistan', 'afg', 'Afghan');
        $this->store(3, 'Albania', 'alb', 'Albanian');
        $this->store(4, 'Algeria', 'dza', 'Algerian');
        $this->store(5, 'Andorra', 'and', 'Andorran');
        $this->store(6, 'Angola', 'ago', 'Angolan');
        $this->store(7, 'Antigua and Barbuda', 'atg', 'Antiguan');
        $this->store(8, 'Argentina', 'arg', 'Argentinean');
        $this->store(9, 'Armenia', 'arm', 'Armenian');
        $this->store(10, 'Aruba', 'abw', 'Arubans');
        $this->store(11, 'Australia', 'aus', 'Australian');
        $this->store(12, 'Azerbaijan', 'aze', 'Azerbaijani');
        $this->store(13, 'Bahamas', 'bhs', 'Bahamian');
        $this->store(14, 'Bahrain', 'bhr', 'Bahraini');
        $this->store(15, 'Bangladesh', 'bgd', 'Bangladeshi');
        $this->store(16, 'Barbados', 'brb', 'Barbadian');
        $this->store(17, 'Belarus', 'blr', 'Belorussian');
        $this->store(18, 'Belgium', 'bel', 'Belgian');
        $this->store(19, 'Belize', 'blz', 'Belizean');
        $this->store(20, 'Benin', 'ben', 'Beninese');
        $this->store(21, 'Bhutan', 'btn', 'Bhutanese');
        $this->store(22, 'Bolivia', 'bol', 'Bolivian');
        $this->store(23, 'Bosnia and Herzegovina', 'bih', 'Bosnian');
        $this->store(24, 'Botswana', 'bwa', 'Motswana');
        $this->store(25, 'Brazil', 'bra', 'Brazilian');
        $this->store(26, 'Brunei', 'brn', 'Bruneian');
        $this->store(27, 'Bulgaria', 'bgr', 'Bulgarian');
        $this->store(28, 'Burkina Faso', 'bfa', 'Burkinabe');
        $this->store(29, 'Burundi', 'bdi', 'Burundian');
        $this->store(30, 'Cambodia', 'khm', 'Cambodian');
        $this->store(31, 'Cameroon', 'cmr', 'Cameroonian');
        $this->store(32, 'Canada', 'can', 'Canadian');
        $this->store(33, 'Cape Verde', 'cpv', 'Cape Verdean');
        $this->store(34, 'Central African Republic', 'caf', 'Central African');
        $this->store(35, 'Chad', 'tcd', 'Chadian');
        $this->store(36, 'Chile', 'chl', 'Chilean');
        $this->store(37, 'China', 'chn', 'Chinese');
        $this->store(38, 'Christmas Island', 'cxr', 'Christmas Islander');
        $this->store(39, 'Colombia', 'col', 'Colombian');
        $this->store(40, 'Comoros', 'com', 'Comorian');
        $this->store(41, 'Congo, Republic of the', 'cog', 'Congolese');
        $this->store(42, 'Congo, Democratic Republic of the', 'cod', 'Congolese');
        $this->store(43, 'Cook Islands', 'cok', 'Cook Islander');
        $this->store(44, 'Costa Rica', 'cri', 'Costa Rican');
        $this->store(45, 'Cote d\'Ivoire', 'civ', 'Ivoirian');
        $this->store(46, 'Croatia', 'hrv', 'Croatian');
        $this->store(47, 'Cuba', 'cub', 'Cuban');
        $this->store(48, 'Cyprus', 'cyp', 'Cypriot');
        $this->store(49, 'Czech Republic', 'cze', 'Czech');
        $this->store(50, 'Denmark', 'dnk', 'Dane');
        $this->store(51, 'Djibouti', 'dji', 'Djiboutian');
        $this->store(52, 'Dominica', 'dma', 'Dominican');
        $this->store(53, 'Dominican Republic', 'dom', 'Dominican');
        $this->store(54, 'East Timor', 'eat', 'East Timorese');
        $this->store(55, 'Ecuador', 'ecu', 'Ecuadorean');
        $this->store(56, 'Egypt', 'egy', 'Egyptian');
        $this->store(57, 'El Salvador', 'slv', 'Salvadorean');
        $this->store(58, 'Equatorial Guinea', 'gnq', 'Equatorial Guinean');
        $this->store(59, 'Eritrea', 'eri', 'Eritrean');
        $this->store(60, 'Estonia', 'est', 'Estonian');
        $this->store(61, 'Ethiopia', 'eth', 'Ethiopian');
        $this->store(62, 'Faroe Islands', 'fro', 'Faroese');
        $this->store(63, 'Fiji', 'fji', 'Fijian');
        $this->store(64, 'Finland', 'fin', 'Finn');
        $this->store(65, 'France', 'fra', 'French');
        $this->store(66, 'French Guiana', 'guf', 'French Guianese');
        $this->store(67, 'French Polynesia', 'pyf', 'French Polynesian');
        $this->store(68, 'Gabon', 'gab', 'Gabonese');
        $this->store(69, 'Gambia', 'gmb', 'Gambian');
        $this->store(70, 'Georgia', 'geo', 'Georgian');
        $this->store(71, 'Germany', 'deu', 'German');
        $this->store(72, 'Ghana', 'gha', 'Ghanaian');
        $this->store(73, 'Gibraltar', 'gib', 'Gibraltarian');
        $this->store(74, 'Greece', 'grc', 'Greek');
        $this->store(75, 'Greenland', 'grl', 'Greenlander');
        $this->store(76, 'Grenada', 'grd', 'Grenadians');
        $this->store(77, 'Guatemala', 'gtm', 'Guatemalan');
        $this->store(78, 'Guinea', 'gin', 'Guinean');
        $this->store(79, 'Guinea-Bissau', 'gnb', 'Guinean');
        $this->store(80, 'Guyana', 'guy', 'Guyanese');
        $this->store(81, 'Haiti', 'hti', 'Haitian');
        $this->store(82, 'Honduras', 'hnd', 'Honduran ');
        $this->store(83, 'Hong Kong', 'hkg', 'Chinese');
        $this->store(84, 'Hungary', 'hun', 'Hungarian');
        $this->store(85, 'Iceland', 'isl', 'Icelander');
        $this->store(86, 'India', 'ind', 'Indian');
        $this->store(87, 'Indonesia', 'idn', 'Indonesian');
        $this->store(88, 'Iran', 'irn', 'Iranian');
        $this->store(89, 'Iraq', 'irq', 'Iraqi');
        $this->store(90, 'Ireland', 'irl', 'Irish');
        $this->store(91, 'Isle of Man', 'imn', 'Manx');
        $this->store(92, 'Israel', 'isr', 'Israeli');
        $this->store(93, 'Italy', 'ita', 'Italian');
        $this->store(94, 'Jamaica', 'jam', 'Jamaican');
        $this->store(95, 'Japan', 'jpn', 'Japanese');
        $this->store(96, 'Jersey', 'iso', 'Channel Islander');
        $this->store(97, 'Jordan', 'jor', 'Jordanian');
        $this->store(98, 'Kazakhstan', 'kaz', 'Kazakh');
        $this->store(99, 'Kenya', 'ken', 'Kenyan');
        $this->store(100, 'Kiribati', 'kir', 'I-Kiribati');
        $this->store(101, 'Korea, Democratic People\'s Republic of', 'prk', 'North Korean');
        $this->store(102, 'Korea, Republic of', 'kor', 'South Korean');
        $this->store(103, 'Kuwait', 'kwt', 'Kuwaiti');
        $this->store(104, 'Kyrgyzstan', 'kgz', 'Kyrgyzstani');
        $this->store(105, 'Lao', 'lao', 'Laotian');
        $this->store(106, 'Latvia', 'lva', 'Latvian');
        $this->store(107, 'Lebanon', 'lbn', 'Lebanese');
        $this->store(108, 'Lesotho', 'lso', 'Mosotho');
        $this->store(109, 'Liberia', 'lbr', 'Liberian');
        $this->store(110, 'Libya', 'lby', 'Libyan');
        $this->store(111, 'Liechtenstein', 'lie', 'Liechtensteiner');
        $this->store(112, 'Lithuania', 'ltu', 'Lithuanian');
        $this->store(113, 'Luxembourg', 'lux', 'Luxembourger');
        $this->store(114, 'Macedonia, Republic of', 'mkd', 'Macedonian');
        $this->store(115, 'Madagascar', 'mdg', 'Madagascan');
        $this->store(116, 'Malawi', 'mwi', 'Malawian');
        $this->store(117, 'Malaysia', 'mys', 'Malaysian');
        $this->store(118, 'Maldives', 'mdv', 'Maldivian');
        $this->store(119, 'Mali', 'mli', 'Malian');
        $this->store(120, 'Malta', 'mlt', 'Maltese');
        $this->store(121, 'Marshall Islands', 'mhl', 'Marshallese');
        $this->store(122, 'Martinique', 'mtq', 'Martiniquais');
        $this->store(123, 'Mauritania', 'mrt', 'Mauritanian');
        $this->store(124, 'Mauritius', 'mus', 'Mauritian');
        $this->store(125, 'Mayotte', 'myt', 'Mahorais');
        $this->store(126, 'Mexico', 'mex', 'Mexican');
        $this->store(127, 'Micronesia, Federated States of', 'iso', 'Micronesian');
        $this->store(128, 'Moldova', 'mda', 'Moldovan');
        $this->store(129, 'Monaco', 'mco', 'Monacan');
        $this->store(130, 'Mongolia', 'mng', 'Mongolian');
        $this->store(131, 'Montenegro', 'mne', 'Montenegrin');
        $this->store(132, 'Montserrat', 'msr', 'Montserratian');
        $this->store(133, 'Morocco', 'mar', 'Moroccan');
        $this->store(134, 'Mozambique', 'moz', 'Mozambican');
        $this->store(135, 'Myanmar', 'mmr', 'Burmese');
        $this->store(136, 'Namibia', 'nam', 'Namibian');
        $this->store(137, 'Nauru', 'nru', 'Nauruan');
        $this->store(138, 'Nepal', 'npl', 'Nepalese');
        $this->store(139, 'Netherlands', 'nld', 'Dutch');
        $this->store(140, 'Netherlands Antilles', 'ant', 'Dutch');
        $this->store(141, 'New Caledonia', 'ncl', 'New Caledonian');
        $this->store(142, 'New Zealand', 'nzl', 'New Zealander');
        $this->store(143, 'Nicaragua', 'nic', 'Nicaraguan');
        $this->store(144, 'Niger', 'ner', 'Nigerien');
        $this->store(145, 'Nigeria', 'nga', 'Nigerian');
        $this->store(146, 'Niue', 'niu', 'Niuean');
        $this->store(147, 'Norfolk Island', 'nfk', 'Norfolk Islander');
        $this->store(148, 'Northern Mariana Islands', 'mnp', 'NA');
        $this->store(149, 'Norway', 'nor', 'Norwegian');
        $this->store(150, 'Oman', 'omn', 'Omani');
        $this->store(151, 'Pakistan', 'pak', 'Pakistani');
        $this->store(152, 'Palau', 'plw', 'Palauan');
        $this->store(153, 'Panama', 'pan', 'Panamanian');
        $this->store(154, 'Papua New Guinea', 'png', 'Papua New Guinean');
        $this->store(155, 'Paraguay', 'pry', 'Paraguayan');
        $this->store(156, 'Peru', 'per', 'Peruvian');
        $this->store(157, 'Philippines', 'phl', 'Filipino');
        $this->store(158, 'Pitcairn', 'pcn', 'Pitcairn Islander');
        $this->store(159, 'Poland', 'pol', 'Polish');
        $this->store(160, 'Portugal', 'prt', 'Portuguese');
        $this->store(161, 'Puerto Rico', 'pri', 'Puerto Rican');
        $this->store(162, 'Qatar', 'qat', 'Qatari');
        $this->store(163, 'Romania', 'rou', 'Romanian');
        $this->store(164, 'Russian Federation', 'rus', 'Russian');
        $this->store(165, 'Rwanda', 'rwa', 'Rwandan');
        $this->store(166, 'Saint Barthelemy', 'blm', 'Barthélemoise');
        $this->store(167, 'Saint Helena', 'shn', 'Saint Helenian');
        $this->store(168, 'Saint Kitts and Nevis', 'kna', 'Kittitian');
        $this->store(169, 'Saint Lucia', 'lca', 'Saint Lucian');
        $this->store(170, 'Saint-Martin', 'maf', 'French');
        $this->store(171, 'Saint Pierre and Miquelon', 'spm', 'French');
        $this->store(172, 'Saint Vincent and Grenadines', 'vct', 'Saint Vincentian');
        $this->store(173, 'Samoa', 'wsm', 'Samoan');
        $this->store(174, 'San Marino', 'smr', 'Sammarinese');
        $this->store(175, 'Sao Tome and Principe', 'stp', 'Sao Tomean');
        $this->store(176, 'Saudi Arabia', 'sau', 'Saudi');
        $this->store(177, 'Senegal', 'sen', 'Senegalese');
        $this->store(178, 'Serbia', 'srb', 'Serbian');
        $this->store(179, 'Seychelles', 'syc', 'Seychellois');
        $this->store(180, 'Sierra Leone', 'sle', 'Sierra Leonean');
        $this->store(181, 'Singapore', 'sgp', 'Singaporean');
        $this->store(182, 'Slovakia', 'svk', 'Slovak');
        $this->store(183, 'Slovenia', 'svn', 'Slovenian');
        $this->store(184, 'Solomon Islands', 'slb', 'Solomon Islander');
        $this->store(185, 'Somalia', 'som', 'Somali');
        $this->store(186, 'South Africa', 'zaf', 'South African');
        $this->store(187, 'South Sudan', 'ssd', 'South Sudanese');
        $this->store(188, 'Spain', 'esp', 'Spanish');
        $this->store(189, 'Sri Lanka', 'lka', 'Sri Lankan');
        $this->store(190, 'Sudan', 'sdn', 'Sudanese');
        $this->store(191, 'Suriname', 'sur', 'Surinamese');
        $this->store(192, 'Swaziland', 'swz', 'Swazi');
        $this->store(193, 'Sweden', 'swe', 'Swede');
        $this->store(194, 'Switzerland', 'che', 'Swiss');
        $this->store(195, 'Syrian Arab Republic', 'syr', 'Syrian');
        $this->store(196, 'Taiwan, Republic of China', 'twn', 'Taiwanese');
        $this->store(197, 'Tajikistan', 'tjk', 'Tadzhik');
        $this->store(198, 'Tanzania, United Republic of', 'tza', 'Tanzanian');
        $this->store(199, 'Thailand', 'tha', 'Thai');
        $this->store(200, 'Togo', 'tgo', 'Togolese');
        $this->store(201, 'Tokelau', 'tkl', 'Tokelauan');
        $this->store(202, 'Tonga', 'ton', 'Tongan');
        $this->store(203, 'Trinidad and Tobago', 'tto', 'Trinidadian');
        $this->store(204, 'Tunisia', 'tun', 'Tunisian');
        $this->store(205, 'Turkey', 'tur', 'Turkish');
        $this->store(206, 'Turkmenistan', 'tkm', 'Turkmen');
        $this->store(207, 'Tuvalu', 'tuv', 'Tuvaluan');
        $this->store(208, 'Uganda', 'uga', 'Ugandan');
        $this->store(209, 'Ukraine', 'ukr', 'Ukrainian');
        $this->store(210, 'United Arab Emirates', 'are', 'Emirati');
        $this->store(211, 'United Kingdom', 'gbr', 'British');
        $this->store(212, 'United States of America', 'usa', 'American');
        $this->store(213, 'Uruguay', 'ury', 'Uruguayan');
        $this->store(214, 'Uzbekistan', 'uzb', 'Uzbek');
        $this->store(215, 'Vanuatu', 'vut', 'Ni-Vanuatu');
        $this->store(216, 'Venezuela', 'ven', 'Venezuelan');
        $this->store(217, 'Vietnam', 'vnm', 'Vietnamese');
        $this->store(218, 'Virgin Islands, US', 'vir', 'Virgin Islander');
        $this->store(219, 'Wallis and Futuna Islands', 'wlf', 'Wallisian');
        $this->store(220, 'Western Sahara', 'esh', 'Sahrawi');
        $this->store(221, 'Yemen', 'yem', 'Yemeni');
        $this->store(222, 'Zambia', 'zmb', 'Zambian');
        $this->store(223, 'Zimbabwe', 'zwe', 'Zimbabwean');
        $this->store(224, 'Austria', 'aut', 'Austrian');
    }

    private function store($id, $name, $acronym, $nationality){
        if(! Country::find($id)) {
            Country::create([
                'id' => $id,
                'name' => $name,
                'acronym' => $acronym,
                'nationality' => $nationality
            ]);
        }
    }
}
