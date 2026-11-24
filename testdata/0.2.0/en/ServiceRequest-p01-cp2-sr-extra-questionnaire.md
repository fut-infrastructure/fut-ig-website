# Questionnaire (extra) - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire (extra)**

## Example ServiceRequest: Questionnaire (extra)

Profile: [ehealth-servicerequest](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-servicerequest.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Episode of care**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = active; period = 2026-09-28 09:00:00+0000 --> (ongoing)](EpisodeOfCare-p01-eoc2.md)

**Sharing policy**: Sharing is allowed destination national health data

**includeAsExtra**: true

**triggerEnablementCode**: NO_TRIGGER

> **ServiceRequest status history**
* status: Active
* period: 2026-09-28 09:05:00+0000 --> (ongoing)

**Sharing Approval Policy**: Manual

**instantiatesCanonical**: [Spørgeskema om tilstand og symptomer](ActivityDefinition-ad-extra-questionnaire.md)

**status**: Active

**intent**: Order

**code**: Master Questionnaire

**subject**: [Sonja Knudsen (official) Female, DoB: 1975-08-05 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#0508754760 (use: official))](Patient-p01.md)

**occurrence**: Once



## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "p01-cp2-sr-extra-questionnaire",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare",
    "valueReference" : {
      "reference" : "EpisodeOfCare/p01-eoc2"
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-policies",
        "code" : "sharingAllowedDestinationNationalHealthData"
      }]
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
    "valueBoolean" : true
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-trigger-enablement-code",
    "valueCode" : "NO_TRIGGER"
  },
  {
    "extension" : [{
      "url" : "status",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/request-status",
          "code" : "active"
        }]
      }
    },
    {
      "url" : "period",
      "valuePeriod" : {
        "start" : "2026-09-28T09:05:00+00:00"
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest-statusHistory"
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingApprovalPolicy",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-approval-policies",
        "code" : "manual"
      }]
    }
  }],
  "instantiatesCanonical" : ["http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-questionnaire"],
  "status" : "active",
  "intent" : "order",
  "code" : {
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/activitydefinition-code",
      "code" : "273586006"
    }]
  },
  "subject" : {
    "reference" : "Patient/p01"
  },
  "occurrenceTiming" : {
    "repeat" : {
      "boundsPeriod" : {
        "start" : "2026-09-28T09:05:00+00:00",
        "end" : "2099-12-31T23:00:00+00:00"
      }
    }
  }
}

```
