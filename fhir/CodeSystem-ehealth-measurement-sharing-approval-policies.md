# Sharing Approval Policies - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sharing Approval Policies**

## CodeSystem: Sharing Approval Policies 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/measurement-sharing-approval-policies | *Version*:6.0.0 |
| Active as of 2023-11-24 | *Computable Name*:SharingApprovalPolicies |

 
Sharing approval policies 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SharingApprovalPolicies](ValueSet-ehealth-measurement-sharing-approval-policies.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-measurement-sharing-approval-policies",
  "url" : "http://ehealth.sundhed.dk/cs/measurement-sharing-approval-policies",
  "version" : "6.0.0",
  "name" : "SharingApprovalPolicies",
  "title" : "Sharing Approval Policies",
  "status" : "active",
  "experimental" : false,
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
  "description" : "Sharing approval policies",
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
      "code" : "manual",
      "display" : "Manual",
      "definition" : "Document sharing must be approved manually",
      "designation" : [
        {
          "language" : "da",
          "value" : "Deling af dokument skal godkendes manuelt"
        }
      ]
    },
    {
      "code" : "automatic",
      "display" : "Automatic",
      "definition" : "Document sharing is approved automatically",
      "designation" : [
        {
          "language" : "da",
          "value" : "Deling af dokument bliver godkendt automatisk"
        }
      ]
    }
  ]
}

```
