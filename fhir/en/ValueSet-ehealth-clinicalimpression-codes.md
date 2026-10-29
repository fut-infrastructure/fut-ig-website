# Clinical Impression Codes - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Clinical Impression Codes**

## ValueSet: Clinical Impression Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/clinicalimpression-codes | *Version*:11.0.3 |
| Active as of 2019-02-08 | *Computable Name*:ClinicalImpressionCodes |

 
Value set of clinical impression codes. 

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
  "id" : "ehealth-clinicalimpression-codes",
  "url" : "http://ehealth.sundhed.dk/vs/clinicalimpression-codes",
  "version" : "11.0.3",
  "name" : "ClinicalImpressionCodes",
  "title" : "Clinical Impression Codes",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set of clinical impression codes.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-codes"
    }]
  }
}

```
