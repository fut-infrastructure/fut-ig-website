# Tilstandskoder - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Tilstandskoder**

## ValueSet: Tilstandskoder 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/condition-conditions | *Version*:11.0.1 |
| Active as of 2022-01-14 | *Computable Name*:Condition_Conditions |

 
Condition Codes 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-condition-conditions",
  "url" : "http://ehealth.sundhed.dk/vs/condition-conditions",
  "version" : "11.0.1",
  "name" : "Condition_Conditions",
  "title" : "Tilstandskoder",
  "status" : "active",
  "experimental" : false,
  "date" : "2022-01-14T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Condition Codes",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://kl.dk/fhir/common/caresocial/ValueSet/KLConditionCodesNursing"]
    }]
  }
}

```
