# Clone Operation - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Clone Operation**

## CodeSystem: Clone Operation 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-clone-operation | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:CloneOperation |

 
Clone operation codes 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-clone-operation",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-clone-operation",
  "version" : "6.0.0",
  "name" : "CloneOperation",
  "title" : "Clone Operation",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Clone operation codes",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "minor-version",
      "display" : "Minor version",
      "definition" : "Code for minor version clone operation"
    },
    {
      "code" : "major-version",
      "display" : "Major version",
      "definition" : "Code for major version clone operation"
    },
    {
      "code" : "copy",
      "display" : "Copy",
      "definition" : "Code for copy operation"
    }
  ]
}

```
