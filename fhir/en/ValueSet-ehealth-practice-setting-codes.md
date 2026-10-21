# Practice Setting Codes - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Practice Setting Codes**

## ValueSet: Practice Setting Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/practice-setting-codes | *Version*:11.0.0 |
| Active as of 2019-02-08 | *Computable Name*:PracticeSettingCodes |

 
Value set used for indicating the specialty for organizations. 

 **References** 

* [ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-practice-setting-codes",
  "url" : "http://ehealth.sundhed.dk/vs/practice-setting-codes",
  "version" : "11.0.0",
  "name" : "PracticeSettingCodes",
  "title" : "Practice Setting Codes",
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
  "description" : "Value set used for indicating the specialty for organizations.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://ehealth.sundhed.dk/vs/sor-organization-specialty"]
    }]
  }
}

```
