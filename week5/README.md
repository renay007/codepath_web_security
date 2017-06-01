# Project 5 - Encryption

Time spent: **5** hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [x]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [x]  Required: Decrypt the government message
  * [x]  Required: Encrypt a response and include in this README

	 	E07DCNHE2yVaGe0zxy7rqqc1xOtlR6XCSxTd9DGMVPF48H9qsAJ4+Fj3b6BBKV+A8QKuiS37uWQhKwNp+ck1ogq/MBZETaGH1IaTPzAvwg0=

3\. Generate Public-Private Keys
  * [x]  Required: Repair the key generator code
  * [x]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [x]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [x]  Required: Repair the create and verify signature code
  
6\. Encrypted Message 2
  * [x]  Required: Decrypt the message
  * [x]  Required: Verify the message
  * [x]  Required: Include a response message in this README

		From: agent99

		To: sydneybristow

		Subject: Encrypted and Signed Message

		Body:

		ePD86/OSWP+hY1oNx3tJiK0QPxwW1Jzf9sES4MGQ8ZUG7/lbfy0xRF3KFqyIwgvdBfpzeiUlfQARAg1XAeBNdChhgpGZZD2NxVbDzuIXKVnVyH6Lo5aJLC7cVTYUIqR3F+XS+pY8L6mYbULdfu/IiaI74pjr+eac9YlMCIEhZkuilqPQJ8jT8ToUu2WFIA12gJNLQjqOGfoIsXdQTOlLobcBrCerOTjftYkzAEqLRfdE/pyhWAvk+fRVhoNmvA1zZnm8dIK733jleTanfE2KxVF9xoTDmpEOwl2HptnnsJRtsmwu8j3DsBh93t8RPWKboDiCqgo6GSw6Ec8NP/YOGQ==
		
		-----BEGIN PUBLIC KEY-----
		MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzLiGKCRLc5LTDz37RNq3
		wHau7ULhR4/f1doyR+jDYE19ACPKcy3Uq042wm7zMJX2J8FSiVWX4IgCKpzCvj/+
		5FiiUjcvg/DIZZjG79OkB1LMR2Jo8Ff0kcntVWSUksZrwTGABLTvlD1WYV1SELCX
		TipYUXVcDDMBWXwT4kXHawyFSyhUAzLbF56ykeCsh/L22pZ8i5B+CAqPdlLO43fb
		Bv5wi2yzpj9HtN79bKiXFpR0i8WiV1LUC07wGs5+DwdA5FikzkfixCEO/X5HBfpl
		oAfBZ5ic8Q2s59kbWbF91sk+ENTr5btRdwwWJAyOuJL7vN1MTj59kUb4aVuKQt0S
		MQIDAQAB
		-----END PUBLIC KEY-----

		Signature:
		M/DmlYzcBBx+Zcmbu36lfBqGjglShjKrcIShOlvV41+y1r69ZuvPhd0Vuw8Eb9DZ/NdcruTdMhNewsn75tGhPXgJIhuMCVWScF6YrwOsCxZZoC6ng4fsKsjpmNP6insPHXb0W7anX3RgPcUR9WRPpc7xuQSPone4iWJjrLRgVWmUi1nmhAhUbllQQCJGHppcQANsrwCeUrpRxyaJjP/EbjlkkbGiNDNmIUUHBQul96HDEvQltswln9NX0/OL1yFls/w32X5bCG3NBI+CFAY7pv0WgFzts/AsvOmHlU6oHu0c1B1DFirXn3THJEWfrVxAT6hLQK0kMG/X9QL4tPenAg==

7\. Agent Messages
  * [x]  Required: Repair the dropbox code
  * [x]  Required: Repair the messages area
  * [x]  Required: Display encrypted messages for all agents
  * [x]  Required: Messages indicate whether the message signature is valid
  * [x]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [x]  Required: Decrypt as many email messages as possible
  * [x]  Required: Identify the double agent: natasha

The following objectives are **optional**:

* Bonus Objective 1\.
  * [x]  Track down the bugs in the code and fix them.

* Bonus Objective 2\.
  * [x]  Write a report of your discoveries (longer than 300 characters).
  * [x]  Compose a secure email for sending over an insecure network.
  * [x]  Include the email with your encrypted report in this README.

		From: agent99

		To: apex_hq

		Subject: Report

		Body:

		Message:
		DjmhIkrN5qKSpwJVBIivH7yRjgoRIm3a5YzuikaqtgydGCSn0Irc9es2jdS7YFVPAhNYMD9HqxgZDdPT6I2H2N4GNI842gjryn5XMqVvcyEAIYms1zCSdLJ9W0Vjb2Lu7uh3+u1wD2J1UJieaiZvAEyp1vztqCfZKeh0RFq8bZrDlfTrxKP9SsOBioSdOpRgXfXBuN24Q7csFb5Xd0WymVKQ/S6mNxBUuY5yaGvUQtiwE94VVa/6c1tXgewwSjrO4I/e2xUycs4Yzdc1xgPSu/xHveoLET4GExaNwES1jDYZ4b+gktB5aWuOVp1fN1oXoqQJG1PQLi/9ewZ5kb/yThZuy3zbg20WXD1uYH1ulLWEeku3ygCGb9Hr682BhzkvbFBVgcaES7G+4anZAdxq44tRwPB9ij/Yu2OLpPiXybRsKyWcoanKe5y9ubS9LekLyod/6jCso56VEjjHfMPj1W/M7QIc0A8vvkHapRNfwx0=
		
		Key Encrypted:
		rMFHH+tCzfBsFycdYarnfH+EiJzpmwK794mZKz7TKl5PHDDNJpOwy7ZrliIS5D6y8QS63Vlc34++LEsz0keZ/hAK57QB2f2kK3MdP99sG1cnPy635Y/9RskTxvtoN+LqH5AqRw0zlLl0EpJ16Ti60R3cy5nNU+KtwaHgM9Lm4Io0y7ABc2vUwJiqfH3h5Z8zB0KZi4ePIPl4875/f5yGJPddVKxGUIeUPIFrPHIClqTmCu2ZPeecj0l6uSVCVhpzCnsT1a85AL5kJSqQB7rTZCCeM5cLcJ6lZQIkriqmajHYRK5qkbgRxU5yMMagh/Nzcf63lZjkSl/y07Ds0v9GbQ==

		-----BEGIN PUBLIC KEY-----
		MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAyKNvqGv5ROD2h3HQLJTE
		U/MDNGrBMSEfIzftA4hUtsSGgngN1cpYuaQbt93rkzNbxvV11oN0laHrXMpB35Gw
		IZyd5pSLYJovWGeW6PAX4T2z313prdTktbiixr39exqMDuKnnBIq4qHmbHozgL6P
		kBHCY8DcnfR44v3cjb/G76SstVuoEsEoBDrMXgXzR/5y7iPJ+Lbia8UgT6sccGB3
		FrPeXgJtaXd0lW2CQFYMOFdZeNfF5Wz/vpig5OMshFQjhydXjJmYUqFrOiK2ZUYT
		sz0HV3pYEuDU8u0hjS/qaguenh6L7RjVQAKWXg2/suZ3JZf1cdxayDUz5fl+Bdjt
		xwIDAQAB
		-----END PUBLIC KEY-----

		Signature:
		l0gu+I3tG020ny/X3vbE0hhClJGUJppiL5fvDiynkL9Nd8Fwkh5fQGvSUViXj2hj544sSfwRGs3+R/LCSvnYSHPXdF6ifa7ynBOTiCmanOx+vLCOEsGuJ/RHYJHEX5JizhIoqKUhORqSEDAn2Gmfes34kyGbM1oPInA4QOYcmxv+pgDrZ3l/3JqWPjLyJ7ktBfKewrG7qr+6pYBR1WdLFERrk+Lvc0uD9JqNy7Cv81kmZXv2e/xNKZxhj5qiVuY/3ktSxfWjWH7KVC61TGDlMA8zrcMRxLV9+JC5XWR4pzeqtb4Pa6ICnFTzTvSfKmFmdLXHlfGq/d8WmFnJhpXEeQ==


* Bonus Objective 3\.
  * [x]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [x]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='https://i.imgur.com/ItKIDkF.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright [yyyy] [name of copyright owner]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
