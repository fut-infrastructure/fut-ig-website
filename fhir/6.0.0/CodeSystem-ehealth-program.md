# eHealth Program - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Program**

## CodeSystem: eHealth Program 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-program | *Version*:6.0.0 |
| Active as of 2024-11-28 | *Computable Name*:eHealthProgram |

 
Codes for programs or projects using the eHealth Infrastructure and wanting to mark various resources as intended for their non-exclusive use. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [eHealthProgram](ValueSet-ehealth-program.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-program",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-program",
  "version" : "6.0.0",
  "name" : "eHealthProgram",
  "title" : "eHealth Program",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-11-28T09:00:00+00:00",
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
  "description" : "Codes for programs or projects using the eHealth Infrastructure and wanting to mark various resources as intended for their non-exclusive use.",
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
      "code" : "kpro",
      "display" : "Kommunal PRO",
      "definition" : "Kommunal patientrapporterede oplysninger"
    },
    {
      "code" : "telma",
      "display" : "Telma",
      "definition" : "Telemedicinsk monitoreringsapplikation"
    },
    {
      "code" : "telma-support-team",
      "display" : "Telma Supportteam",
      "definition" : "Supportteam for Telemedicinsk monitoreringsapplikation"
    }
  ]
}

```
