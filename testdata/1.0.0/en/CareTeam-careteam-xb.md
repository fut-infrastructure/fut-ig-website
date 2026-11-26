# KOL care team for kpro - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **KOL care team for kpro**

## Example CareTeam: KOL care team for kpro

Profile: [ehealth-careteam](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-careteam.html)

**useContext**: [Program](http://terminology.hl7.org/7.5.0/CodeSystem-usage-context-type.html) = Kommunal PRO

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.3.0/NamingSystem-uri.html)/urn:uuid:f974ea3c-4481-4651-808a-b270ff4795dd (use: official)

**status**: Active

**name**: Telemedicinsk KOL-team - kpro

**period**: 2025-01-01 00:00:00+0100 --> (ongoing)

> **participant****role**: Monitoring adjuster, Monitoring assistor, Clinical viewer, Citizen enroller**member**: [Test kpro Testesen (urn:oid:0.9.2342.19200300.100.1.1#ebf319ef-fcd7-4757-80df-0611f11bb618)](Practitioner-practitioner-xb.md)**period**: 2025-01-01 00:00:00+0100 --> (ongoing)

**reasonCode**: Kronisk obstruktiv lungesygdom

**managingOrganization**: [Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing)))](Organization-org-region-nordjylland.md)



## Resource Content

```json
{
  "resourceType" : "CareTeam",
  "id" : "careteam-xb",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"]
  },
  "extension" : [{
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-useContext",
    "valueUsageContext" : {
      "code" : {
        "system" : "http://terminology.hl7.org/CodeSystem/usage-context-type",
        "code" : "program",
        "display" : "Program"
      },
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://ehealth.sundhed.dk/cs/ehealth-program",
          "code" : "kpro"
        }]
      }
    }
  }],
  "identifier" : [{
    "use" : "official",
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:f974ea3c-4481-4651-808a-b270ff4795dd"
  }],
  "status" : "active",
  "name" : "Telemedicinsk KOL-team - kpro",
  "period" : {
    "start" : "2025-01-01T00:00:00+01:00"
  },
  "participant" : [{
    "role" : [{
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/careteam-participant-role",
        "code" : "monitoring_adjuster",
        "display" : "Monitoring adjuster"
      }]
    },
    {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/careteam-participant-role",
        "code" : "monitoringAssistor",
        "display" : "Monitoring assistor"
      }]
    },
    {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/careteam-participant-role",
        "code" : "clinicalViewer",
        "display" : "Clinical viewer"
      }]
    },
    {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/careteam-participant-role",
        "code" : "citizenEnroller",
        "display" : "Citizen enroller"
      }]
    }],
    "member" : {
      "reference" : "Practitioner/practitioner-xb"
    },
    "period" : {
      "start" : "2025-01-01T00:00:00+01:00"
    }
  }],
  "reasonCode" : [{
    "coding" : [{
      "system" : "urn:oid:1.2.208.176.2.4",
      "code" : "DJ44",
      "display" : "Kronisk obstruktiv lungesygdom"
    }]
  }],
  "managingOrganization" : [{
    "reference" : "Organization/org-region-nordjylland"
  }]
}

```
