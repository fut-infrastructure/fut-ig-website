# Sharing Approval Policies - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sharing Approval Policies**

## ValueSet: Sharing Approval Policies (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/measurement-sharing-approval-policies | *Version*:11.0.2 |
| Active as of 2023-11-24 | *Computable Name*:SharingApprovalPolicies |

 
Policies of approval for sharing measurement submissions with national registers such as KIH. 

 **References** 

* [Sharing Approval Policy](StructureDefinition-ehealth-sharingApprovalPolicy.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-measurement-sharing-approval-policies",
  "url" : "http://ehealth.sundhed.dk/vs/measurement-sharing-approval-policies",
  "version" : "11.0.2",
  "name" : "SharingApprovalPolicies",
  "title" : "Sharing Approval Policies",
  "status" : "active",
  "experimental" : true,
  "date" : "2023-11-24T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Policies of approval for sharing measurement submissions with national registers such as KIH.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-approval-policies"
    }]
  }
}

```
