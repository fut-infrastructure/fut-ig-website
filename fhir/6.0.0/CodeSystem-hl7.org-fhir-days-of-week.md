# Days Of Week - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Days Of Week**

## CodeSystem: Days Of Week 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org/fhir/days-of-week | *Version*:6.0.0 | |
| *Standards status:*[Normative](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 5 | *Computable Name*:DaysOfWeek |

 
The days of the week. 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

This code system supplement `http://hl7.org/fhir/days-of-week` defines displays on the following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "hl7.org-fhir-days-of-week",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "pa"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "normative"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-normative-version",
      "valueCode" : "4.0.0"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 5
    }
  ],
  "url" : "http://hl7.org/fhir/days-of-week",
  "version" : "6.0.0",
  "name" : "DaysOfWeek",
  "title" : "Days Of Week",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-10-27T13:27:27+00:00",
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
  "description" : "The days of the week.",
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
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/days-of-week",
  "concept" : [
    {
      "code" : "mon",
      "display" : "Monday",
      "definition" : "Monday",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Mandag"
        }
      ]
    },
    {
      "code" : "tue",
      "display" : "Tuesday",
      "definition" : "Tuesday",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Tirsdag"
        }
      ]
    },
    {
      "code" : "wed",
      "display" : "Wednesday",
      "definition" : "Wednesday",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Onsdag"
        }
      ]
    },
    {
      "code" : "thu",
      "display" : "Thursday",
      "definition" : "Thursday",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Torsdag"
        }
      ]
    },
    {
      "code" : "fri",
      "display" : "Friday",
      "definition" : "Friday",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Fredag"
        }
      ]
    },
    {
      "code" : "sat",
      "display" : "Saturday",
      "definition" : "Saturday",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Lørdag"
        }
      ]
    },
    {
      "code" : "sun",
      "display" : "Sunday",
      "definition" : "Sunday",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Søndag"
        }
      ]
    }
  ]
}

```
