# Reference Range Type - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reference Range Type**

## ValueSet: Reference Range Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/reference-range-type | *Version*:11.0.1 |
| Active as of 2019-02-08 | *Computable Name*:ReferenceRangeType |

 
Reference Range type value set. 

 **References** 

* [ehealth-observation](StructureDefinition-ehealth-observation.md)
* [Reference range](StructureDefinition-ehealth-referenceRange.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-reference-range-type",
  "url" : "http://ehealth.sundhed.dk/vs/reference-range-type",
  "version" : "11.0.1",
  "name" : "ReferenceRangeType",
  "title" : "Reference Range Type",
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
  "description" : "Reference Range type value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/referencerange-meaning"
    },
    {
      "valueSet" : ["http://ehealth.sundhed.dk/vs/observation-codes"]
    },
    {
      "system" : "urn:oid:1.2.208.184.100.1",
      "concept" : [{
        "code" : "RAL"
      },
      {
        "code" : "GAL"
      }]
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/reference-range-type"
    }]
  }
}

```
