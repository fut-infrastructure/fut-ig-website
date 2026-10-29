# Measurement Sharing Policies - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Measurement Sharing Policies**

## ValueSet: Measurement Sharing Policies (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/measurement-sharing-policies | *Version*:11.0.3 |
| Active as of 2019-02-08 | *Computable Name*:MeasurementSharingPolicies |

 
Policies of sharing submissions with national registers such as KIH. 

 **References** 

* [Sharing policy](StructureDefinition-ehealth-sharingPolicy.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-measurement-sharing-policies",
  "url" : "http://ehealth.sundhed.dk/vs/measurement-sharing-policies",
  "version" : "11.0.3",
  "name" : "MeasurementSharingPolicies",
  "title" : "Measurement Sharing Policies",
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
  "description" : "Policies of sharing submissions with national registers such as KIH.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-policies"
    }]
  }
}

```
