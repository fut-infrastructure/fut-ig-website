# Sharing Approval Policies - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sharing Approval Policies**

## ValueSet: Sharing Approval Policies (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/measurement-sharing-approval-policies | *Version*:6.0.0 |
| Active as of 2023-11-24 | *Computable Name*:SharingApprovalPolicies |

 
Policies of approval for sharing measurement submissions with national registers such as KIH. 

 **References** 

* [Sharing Approval Policy](StructureDefinition-ehealth-sharingApprovalPolicy.md)

### Logical Definition (CLD)

* Include all codes defined in [`http://ehealth.sundhed.dk/cs/measurement-sharing-approval-policies`](CodeSystem-ehealth-measurement-sharing-approval-policies.md)version 📦6.0.0

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-measurement-sharing-approval-policies",
  "url" : "http://ehealth.sundhed.dk/vs/measurement-sharing-approval-policies",
  "version" : "6.0.0",
  "name" : "SharingApprovalPolicies",
  "title" : "Sharing Approval Policies",
  "status" : "active",
  "experimental" : true,
  "date" : "2023-11-24T00:00:00+00:00",
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
  "description" : "Policies of approval for sharing measurement submissions with national registers such as KIH.",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-approval-policies"
      }
    ]
  }
}

```
