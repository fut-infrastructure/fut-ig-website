# SNOMED CT Code System Supplement - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SNOMED CT Code System Supplement**

## CodeSystem: SNOMED CT Code System Supplement 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/snomed.info/sct/supplement | *Version*:10.0.0 |
| Active as of 2025-01-06 | *Computable Name*:SNOMED CT Supplement |

 
SNOMED Clinical Terms 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth.sundhed.dk-snomed.info-sct-supplement",
  "url" : "http://ehealth.sundhed.dk/snomed.info/sct/supplement",
  "version" : "10.0.0",
  "name" : "SNOMED CT Supplement",
  "title" : "SNOMED CT Code System Supplement",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-01-06T00:00:00+01:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "SNOMED Clinical Terms",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "content" : "supplement",
  "supplements" : "http://snomed.info/sct",
  "concept" : [{
    "code" : "446080005",
    "display" : "Photography of wound",
    "designation" : [{
      "language" : "da",
      "value" : "Billede af sår"
    }]
  },
  {
    "code" : "225395003",
    "display" : "Wound assessment (procedure)",
    "designation" : [{
      "language" : "da",
      "value" : "Sårvurdering"
    }]
  },
  {
    "code" : "225358003",
    "display" : "Wound care (regime/therapy)",
    "designation" : [{
      "language" : "da",
      "value" : "Sårbehandling og -pleje"
    }]
  }]
}

```
