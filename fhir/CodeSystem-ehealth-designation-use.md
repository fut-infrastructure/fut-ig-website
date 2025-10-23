# eHealth Designation Use - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Designation Use**

## CodeSystem: eHealth Designation Use 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-designation-use | *Version*:6.0.0 |
| Active as of 2025-03-05 | *Computable Name*:eHealthDesignationUse |

 
Codes used to identify/describe designation use. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [eHealthDesignationUse](ValueSet-ehealth-designation-use.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-designation-use",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-designation-use",
  "version" : "6.0.0",
  "name" : "eHealthDesignationUse",
  "title" : "eHealth Designation Use",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-03-05T09:00:00+00:00",
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
  "description" : "Codes used to identify/describe designation use.",
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
      "code" : "phmr-short-name",
      "display" : "PHMR Short Name",
      "definition" : "PHMR Short Name used for display names in IHE profiles"
    }
  ]
}

```
