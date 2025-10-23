# Danish SNOMED CT Extension - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish SNOMED CT Extension**

## CodeSystem: Danish SNOMED CT Extension 

| | |
| :--- | :--- |
| *Official URL*:http://snomed.info/sct/554471000005108/version/20180331 | *Version*:6.0.0 |
| Active as of 2019-12-27 | *Computable Name*:Danish-SNOMED-CT-Extension |
| *Other Identifiers:*OID:2.16.840.1.113883.6.96 | |

 
Danish SNOMED CT Extension 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FacilityTypeCodes](ValueSet-ehealth-facility-type-codes.md)
* [SorOrganizationType](ValueSet-ehealth-sor-organization-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "snomed-20180331",
  "url" : "http://snomed.info/sct/554471000005108/version/20180331",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.840.1.113883.6.96"
    }
  ],
  "version" : "6.0.0",
  "name" : "Danish-SNOMED-CT-Extension",
  "title" : "Danish SNOMED CT Extension",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-12-27T00:00:00+00:00",
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
  "description" : "Danish SNOMED CT Extension",
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
      "code" : "557511000005107",
      "display" : "Acupuncture clinic",
      "definition" : "Acupuncture clinic",
      "designation" : [
        {
          "language" : "da",
          "value" : "akupunkturklinik"
        }
      ]
    },
    {
      "code" : "557501000005109",
      "display" : "Pharmacy branch",
      "definition" : "Pharmacy branch",
      "designation" : [
        {
          "language" : "da",
          "value" : "apoteksfilial"
        }
      ]
    },
    {
      "code" : "557531000005103",
      "display" : "Prosthetist clinic",
      "definition" : "Prosthetist clinic",
      "designation" : [
        {
          "language" : "da",
          "value" : "bandagistklinik"
        }
      ]
    },
    {
      "code" : "557591000005104",
      "display" : "Web-based care",
      "definition" : "Web-based care",
      "designation" : [
        {
          "language" : "da",
          "value" : "internetbaseret sundhedsydelse"
        }
      ]
    },
    {
      "code" : "557521000005101",
      "display" : "Alternative treatment clinic",
      "definition" : "Alternative treatment clinic",
      "designation" : [
        {
          "language" : "da",
          "value" : "klinik for alternativ behandling"
        }
      ]
    },
    {
      "code" : "557561000005105",
      "display" : "Consulting firm",
      "definition" : "Consulting firm",
      "designation" : [
        {
          "language" : "da",
          "value" : "konsulentvirksomhed"
        }
      ]
    },
    {
      "code" : "557541000005106",
      "display" : "Cosmetic treatment clinic",
      "definition" : "Cosmetic treatment clinic",
      "designation" : [
        {
          "language" : "da",
          "value" : "kosmetisk klinik"
        }
      ]
    },
    {
      "code" : "557581000005102",
      "display" : "Optometrist or optician clinic",
      "definition" : "Optometrist or optician clinic",
      "designation" : [
        {
          "language" : "da",
          "value" : "optikervirksomhed"
        }
      ]
    },
    {
      "code" : "556841000005105",
      "display" : "Social psychological counselling",
      "definition" : "Social psychological counselling",
      "designation" : [
        {
          "language" : "da",
          "value" : "pædagogisk psykologisk rådgivning"
        }
      ]
    }
  ]
}

```
