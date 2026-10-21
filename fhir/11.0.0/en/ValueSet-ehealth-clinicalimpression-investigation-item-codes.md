# ClinicalImpression Investigation Item Codes - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ClinicalImpression Investigation Item Codes**

## ValueSet: ClinicalImpression Investigation Item Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/clinicalimpression-investigation-item-codes | *Version*:11.0.0 |
| Active as of 2024-01-19 | *Computable Name*:ClinicalImpressionInvestigationItemCodes |

 
Value set of clinical impression investigation item codes. 

 **References** 

* [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-clinicalimpression-investigation-item-codes",
  "url" : "http://ehealth.sundhed.dk/vs/clinicalimpression-investigation-item-codes",
  "version" : "11.0.0",
  "name" : "ClinicalImpressionInvestigationItemCodes",
  "title" : "ClinicalImpression Investigation Item Codes",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-01-19T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set of clinical impression investigation item codes.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-investigation-item-codes"
    },
    {
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "160237006"
      }]
    }]
  }
}

```
